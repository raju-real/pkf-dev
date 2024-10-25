@extends('website.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">{{ $people->name ?? '' }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('peoples') }}">People Directory</a></li>
                    <li class="text-decoration-none">{{ $people->name ?? '' }}</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->


    <!-- Navtab -->
    <section id="service-details" class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>{{ $people->name ?? '' }}</h4>
                    <br>
                    <img src="{{ asset($people->image) }}" alt="{{ $people->name ?? '' }}" class="img-responsive" height="400" width="100%"/>
                </div>
                <div class="col-md-8">
                    <!-- Latest News -->
                    <div id="latest-news" class="latest-news">
                        <div class="section-common-heading">
                            <h2>Our People</h2>
                        </div>
                        <div class="row gy-4">
                          <p class="person-details">
                            <br />
                            <strong>Tel:</strong> {{ $people->telephone ?? '' }} <br />
                            <strong>Email:</strong> <a href="">{{ $people->email ?? '' }}</a>
                          </p>
                          <p>{!! $people->description ?? '' !!}</p>
                        </div><!-- End recent posts list -->
                    </div>
                    <div>
                      <a href="{{ route('peoples') }}" class="btn default-btn mt-5">
                          Return to Directory
                      </a>
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
