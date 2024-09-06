@extends('admin.layouts.app')
@section('title',$data->title ?? "News")
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">News Details</h2>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <a href="{{ route('admin.news.index') }}" class="btn btn-primary">
            <i class="fa fa-arrow-left"></i>
            Back
        </a>
    </div>
</div>
<div class="content-body">
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                           <tr>
                                <th>Image</th>
                                <td>:</td>
                                <td>
                                    <img src="{{ asset($data->image) }}" alt="" class="img-responsive"
                                            height="200" width="200">
                                </td>
                           </tr>
                           <tr>
                                <th>Category</th>
                                <td>:</td>
                                <td>{{ $data->category->name ?? "N/A" }}</td>
                           </tr>
                           <tr>
                                <th>Title</th>
                                <td>:</td>
                                <td>{{ $data->title ?? "N/A" }}</td>
                           </tr>
                           <tr>
                                <th>Description</th>
                                <td>:</td>
                                <td>{!! $data->description ?? "N/A" !!}</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection