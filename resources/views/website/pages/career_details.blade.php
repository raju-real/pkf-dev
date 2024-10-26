@extends('website.layouts.app')

@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-12">
                            <h1 class="heading-title">Job Details</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="text-decoration-none">Job Details</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->


        <!-- Navtab -->
        <section id="service-details" class="service-details">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-8">
                        <article>
                            <h1>{{ $data->department->name ?? '' }}</h1>
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <p>{{ $data->title ?? '' }}</p>
                                    <h5>{{ date('Y-m-d',strtotime($data->created_at)) }}</h5>
                                    <p>{!! $data->description ?? '' !!}</p>
                                </div>
                            </div>
                            @if ($data->file)
                                <div class="text-center">
                                    <a target="_blank" href="{{ asset($data->file) }}" class="btn default-btn mt-5">
                                        Download Attachment
                                    </a>
                                </div>
                            @endif
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Navtab End -->
    @endsection

    @push('js')
    @endpush
