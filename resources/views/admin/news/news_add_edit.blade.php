@extends('admin.layouts.app')
@section('title',"Add/Edit News")
@push('css')

@endpush

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">{{ "Add/Edit News" }}</h2>
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
                        <form action="{{ $route }}" class="form" method="POST" id="prevent-form" enctype="multipart/form-data">
                            @csrf
                            @isset($data)
                                @method('PUT')
                            @endisset
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Category {!! starSign() !!}</label>
                                        <select name="category" class="form-control select2">
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
                                

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Title {!! starSign() !!}</label>
                                        <input type="text" name="title"
                                            value="{{ old('title') ?? $data->title ?? '' }}"
                                            class="form-control {!! hasError('title') !!}" placeholder="Title" />
                                        @error('title')
                                        {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="customFile">Image (Max: 5MB) {!! starSign() !!}</label>
                                        <div class="custom-file">
                                            <input name="image" type="file"
                                                class="custom-file-input {!! hasError('image') !!}" id="customFile" />
                                            <label class="custom-file-label" for="customFile">Choose Image</label>
                                            @error('image')
                                            {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Description {!! starSign() !!}</label>
                                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ old('description') ?? $data->description ?? '' }}</textarea>
                                        @error('description')
                                        {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12 text-right">
                                    <a href="{{ url()->previous() ?? route('admin.dashboard') }}" class="btn btn-info">Back</a>
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
    CKEDITOR.replace( 'description', {
        removePlugins: ['info','image'],
   });
</script>
@endpush