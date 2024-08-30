@extends('admin.layouts.app')
@section('title', 'Add/Edit People Directory')
@push('css')
@endpush

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">{{ 'Add/Edit People Directory' }}</h2>
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
                                            <label>Name {!! starSign() !!}</label>
                                            <input type="text" name="name"
                                                value="{{ old('name') ?? ($data->name ?? '') }}"
                                                class="form-control {!! hasError('name') !!}" placeholder="Name" />
                                            @error('name')
                                                {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Designation {!! starSign() !!}</label>
                                            <input type="text" name="designation"
                                                value="{{ old('designation') ?? ($data->designation ?? '') }}"
                                                class="form-control {!! hasError('designation') !!}" placeholder="Designation" />
                                            @error('designation')
                                                {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Email {!! starSign() !!}</label>
                                            <input type="text" name="email"
                                                value="{{ old('email') ?? ($data->email ?? '') }}"
                                                class="form-control {!! hasError('email') !!}" placeholder="Email" />
                                            @error('email')
                                                {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Telephone {!! starSign() !!}</label>
                                            <input type="text" name="telephone"
                                                value="{{ old('telephone') ?? ($data->telephone ?? '') }}"
                                                class="form-control {!! hasError('telephone') !!}" placeholder="Telephone" />
                                            @error('telephone')
                                                {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Linkedin Link</label>
                                            <input type="text" name="linkedin_link"
                                                value="{{ old('linkedin_link') ?? ($data->linkedin_link ?? '') }}"
                                                class="form-control {!! hasError('linkedin_link') !!}" placeholder="Linkedin Link" />
                                            @error('linkedin_link')
                                                {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="customFile">Image (png,jpg,jpeg, Max: 5MB) {!! starSign() !!}</label>
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
                                            <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ old('description') ?? ($data->description ?? '') }}</textarea>
                                            @error('description')
                                                {!! displayError($message) !!}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 text-right">
                                        <a href="{{ route('admin.people-directories.index') }}"
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
    </script>
@endpush
