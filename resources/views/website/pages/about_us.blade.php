@extends('website.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="text-decoration-none">About Us</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->


    <!-- Navtab -->
    <section id="service-details" class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="subnav">
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-arrow-right"></i>
                                <a href="{{ route('peoples') }}">People Directory</a>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-arrow-right"></i>
                                <a href="{{ route('our-services') }}">Services</a>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-arrow-right"></i>
                                <a href="{{ route('all-publications') }}">Publications</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <!-- Latest News -->
                    <div id="latest-news" class="latest-news">
                        <div class="col-xl-12 col-md-12">
                            <article>
                                <h1 class="title">{{ siteSetting()['about_us_title'] ?? '' }}</h1>
                                <div class="post-img">
                                    <img src="{{ asset(siteSetting()['about_us_image'] ?? '') }}" alt=""
                                        class="img-fluid">
                                </div>
                                <p>{!! siteSetting()['about_us'] ?? '' !!}</p>
                            </article>
                        </div>
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
