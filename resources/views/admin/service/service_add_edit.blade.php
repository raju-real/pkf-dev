@extends('admin.layouts.app')
@section('title', 'Add/Edit Service')
@push('css')
@endpush

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">{{ 'Add/Edit Service' }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ $route }}" class="form" method="POST" id="prevent-form"
                                enctype="multipart/form-data">
                                @csrf
                                @isset($data)
                                    @method('PUT')
                                @endisset
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Category {!! starSign() !!}</label>
                                            <select name="category" class="form-control select2" id="cateogory">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ (old('category') ?? (isset($data) ? $data->category_id : '')) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-2 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Subcategory {!! starSign() !!}</label>
                                            <select name="subcategory" class="form-control select2" id="subcategory" data-old-value="{{ $data->subcategory_id ?? '' }}">
                                                @if (isset($obj))
                                                    <option value="{{ $obj->subcategory_id }}" selected>
                                                        {{ $obj->subcategory->name ?? '' }}
                                                    </option>
                                                @else
                                                    <option value="">Select Subcategory</option>
                                                @endisset
                                        </select>
                                    </div>
                                    @error('subcategory')
                                        {!! displayError($message) !!}
                                    @enderror
                                </div>
                            

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Title {!! starSign() !!}</label>
                                        <input type="text" name="title"
                                            value="{{ old('title') ?? ($data->title ?? '') }}"
                                            class="form-control {!! hasError('title') !!}" placeholder="Title" />
                                        @error('title')
                                            {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>
                               

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Description {!! starSign() !!}</label>
                                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ old('description') ?? ($data->description ?? '') }}</textarea>
                                        @error('description')
                                            {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="customFile">Icon (png,Max: 1MB) {!! starSign() !!}</label>
                                        <div class="custom-file">
                                            <input name="icon" type="file"
                                                class="custom-file-input {!! hasError('icon') !!}" id="customFile" accept=".png" />
                                            <label class="custom-file-label" for="customFile" >Choose icon</label>
                                            @error('icon')
                                            {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-right">
                                    <a href="{{ route('admin.services.index') }}"
                                        class="btn btn-info">Back</a>
                                    <x-submit-button-component />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('js')
<script>
    CKEDITOR.replace('description', {
        removePlugins: ['info', 'image'],
    });

    const subCategorySelector = $('#subcategory');

    $(document).ready(function() {
        let category_id = $('#cateogory').val();
        if(category_id !== undefined) {
            appendSubCategory(category_id);
        }
    });

    $(document).on('change', '#cateogory', function() {
        subCategorySelector.empty().append('<option value="">Select Subcategory</option>');
        let category_id = $(this).val();
        appendSubCategory(category_id);
    });

    function appendSubCategory(category_id) {
        $.ajax({
            url: window.location.origin + "/api/cat-wise-service-subcategory/" + category_id,
            success: function (response) {
                $.each(response, function (i, subcategory) {
                    const option = $('<option>', {
                        value: subcategory.id,
                        text: subcategory.name
                    });

                    const oldSelectedValue = subCategorySelector.data('old-value');
                    if (oldSelectedValue !== undefined && oldSelectedValue !== null && oldSelectedValue === subcategory.id) {
                        option.attr('selected', 'selected');
                    }

                    subCategorySelector.append(option);
                });
            }
        });
    }
    

</script>
@endpush
