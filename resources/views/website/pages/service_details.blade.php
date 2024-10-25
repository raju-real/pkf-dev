@extends('website.layouts.app')

@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-12">
                            <h1 class="heading-title">Service</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="text-decoration-none">Service</li>
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
                            @foreach (serviceCategories() as $category)
                                <li class="{{ $loop->first ? 'active' : '' }}">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <a href="{{ route('our-services', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                    </div>
                                    <ul class="inner-log">
                                        @foreach ($category->subcategories as $subcategory)
                                            <li>
                                                <a
                                                    href="{{ route('our-services', ['category' => $category->slug, 'subcategory' => $subcategory->slug]) }}">
                                                    {{ $subcategory->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                        <br>
                        <h4>Service Search</h4>
                        <form action="{{ route('our-services') }}" method="get" class="searchForm">
                            <input type="search" name="SearchTerm" value="{{ request('SearchTerm') }}" class="form-control"
                                placeholder="Search">
                        </form>
                    </div>
                    <div class="col-md-8">
                        <article>
                            <h1>{{ $service->category->name ?? '' }}</h1>
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <p>{{ $service->title ?? '' }}</p>
                                    <h5>{{ date('Y-m-d',strtotime($service->created_at)) }}</h5>
                                    <p>{!! $service->description ?? '' !!}</p>
                                </div>
                            </div>
                            
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Navtab End -->
    @endsection

    @push('js')
    @endpush
