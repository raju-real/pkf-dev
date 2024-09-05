@extends('admin.layouts.app')
@section('title',"Add/Edit Slider")
@push('css')

@endpush

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">{{ "Add/Edit Slider" }}</h2>
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
                                        <label>Short Text</label>
                                        <input type="text" name="short_text"
                                            value="{{ old('short_text') ?? $data->short_text ?? '' }}"
                                            class="form-control {!! hasError('short_text') !!}" placeholder="Short Text" />
                                        @error('short_text')
                                        {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Image (1920x468, Max: 5MB) {!! starSign() !!}</label>
                                        <input type="file" name="image" accept=".jpg,.jpeg,.png"
                                            class="form-control {!! hasError('image') !!}" />
                                        @error('image')
                                        {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Linkable Button Name</label>
                                        <input type="text" name="button_name"
                                            value="{{ old('button_name') ?? $data->button_name ?? '' }}"
                                            class="form-control {!! hasError('button_name') !!}" placeholder="Linkable Button Name" />
                                        @error('button_name')
                                        {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="form-group">
                                        <label>Redirect Link</label>
                                        <input type="text" name="link"
                                            value="{{ old('link') ?? $data->link ?? '' }}"
                                            class="form-control {!! hasError('link') !!}" placeholder="Redirect Link" />
                                        @error('link')
                                        {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>

                                
                                <div class="col-12 text-right">
                                    <a href="{{ route('admin.sliders.index') }}" class="btn btn-info">Back</a>
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

@endpush