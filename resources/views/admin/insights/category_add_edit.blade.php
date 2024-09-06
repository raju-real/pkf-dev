@extends('admin.layouts.app')
@section('title',"Add/Edit Publication Category")
@push('css')

@endpush

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">{{ "Add/Edit Publication Category" }}</h2>
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
                        <form action="{{ $route }}" class="form" method="POST" id="prevent-form" >
                            @csrf
                            @isset($data)
                                @method('PUT')
                            @endisset
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Category Name {!! starSign() !!}</label>
                                        <input type="text" name="name"
                                            value="{{ old('name') ?? $data->name ?? '' }}"
                                            class="form-control {!! hasError('name') !!}" placeholder="Category Name" />
                                        @error('name')
                                        {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="" cols="30" rows="2" class="form-control {!! hasError('short_text') !!}" placeholder="Description">{{ old('description') ?? $data->description ?? '' }}</textarea>
                                        
                                        @error('short_text')
                                        {!! displayError($message) !!}
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="col-12 text-right">
                                    <a href="{{ route('admin.publication-categories.index') }}" class="btn btn-info">Back</a>
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