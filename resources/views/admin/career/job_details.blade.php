@extends('admin.layouts.app')
@section('title',$data->title ?? "Job")
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Job Details</h2>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <a href="{{ route('admin.jobs.index') }}" class="btn btn-primary">
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
                            @isset($data->file)
                           <tr>
                                <th>Department</th>
                                <td>:</td>
                                <td><a target="_blank" class="btn btn-sm badge-info" href="{{ asset($data->file) }}">File</a></td>
                           </tr>
                           @endisset
                           <tr>
                                <th>Department</th>
                                <td>:</td>
                                <td>{{ $data->department->name ?? "N/A" }}</td>
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