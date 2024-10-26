@extends('admin.layouts.app')
@section('title',"Add/Edit Job")
@push('css')

@endpush

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">{{ "Add/Edit Job" }}</h2>
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
                                        <label>Department {!! starSign() !!}</label>
                                        <select name="department" class="form-control select2">
                                            <option value="">Select Department</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}"
                                                    {{ (old('department') ?? (isset($data) ? $data->department_id : '')) == $department->id ? 'selected' : '' }}>
                                                    {{ $department->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('department')
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
                                        <label>Location {!! starSign() !!}</label>
                                        <input type="text" name="location"
                                            value="{{ old('location') ?? $data->location ?? '' }}"
                                            class="form-control {!! hasError('location') !!}" placeholder="Location" />
                                        @error('location')
                                        {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>
                               
                               
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="customFile">File (Max: 10MB)</label>
                                        <div class="custom-file">
                                            <input name="file" type="file"
                                                class="custom-file-input {!! hasError('file') !!}" accept=".pdf" />
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('file')
                                            {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Status {!! starSign() !!}</label>
                                        <select name="status" class="form-control select2">
                                            <option value="">Select Status</option>
                                            <option value="active" {{ old('status') == 'active' || (isset($data) && $data->status == 'active') ? 'selected' : '' }}>Active</option>
                                            <option value="in-active" {{ old('status') == 'in-active' || (isset($data) && $data->status == 'in-active') ? 'selected' : '' }}>In Active</option>
                                        </select>
                                        
                                        @error('status')
                                        {!! displayError($message) !!}
                                        @enderror
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