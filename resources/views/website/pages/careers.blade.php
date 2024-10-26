@extends('website.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">Careers</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="text-decoration-none">Careers</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->


    <!-- Navtab -->
    <section id="service-details" class="service-details">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <!-- Latest News -->
                    <div id="latest-news" class="latest-news">
                        <div class="section-common-heading">
                            <h2>Jobs</h2>
                        </div>
                        <div class="row gy-4 table-responsive">
                            @if (count($jobs))
                                <table id="myTable" class="display nowrap dataTable dtr-inline collapsed  pb-10">
                                    <thead>
                                        <tr>
                                            <th>Job Title</th>
                                            <th>Department</th>
                                            <th>Location</th>
                                            <th>Attachments</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $job)
                                            <tr>
                                                <td>{{ $job->department->name ?? '' }}</td>
                                                <td>{{ $job->title ?? '' }}</td>
                                                <td>{{ $job->location ?? '' }}</td>
                                                <td>
                                                    @isset($job->file)
                                                    <a target="_blank" class="btn btn-sm btn-info" href="{{ asset($job->file) }}">File</a>
                                                    @else
                                                    {{ "N/A" }}
                                                    @endisset
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{ route('career-details', $job->slug) }}"
                                                        class="btn default-btn">Read More <i
                                                            class="fa-solid fa-angles-right"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="alert alert-danger">No results found!</p>
                            @endif
                        </div><!-- End recent posts list -->
                    </div>
                    <!-- Latest News End -->

                </div>
            </div>
        </div>
    </section>
    <!-- Navtab End -->
@endsection

@push('js')
@endpush
