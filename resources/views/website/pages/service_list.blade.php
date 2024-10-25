@extends('website.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">Our Services</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="text-decoration-none">Services</li>
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
                    <!-- Latest News -->
                    <div id="latest-news" class="latest-news">
                        <div class="section-common-heading">
                            <h2>Services</h2>
                        </div>
                        <div class="row gy-4">
                            @foreach ($results as $service)
                            <div class="col-6">
                                <a href="{{ route('service-details',$service->slug) }}" class="service-item">
                                    @isset($service->icon)
                                    <img src="{{ asset($service->icon) }}" alt="" height="100" width="100">
                                    @endif
                                    <p>{{ $service->title ?? "" }}</p>
                                </a>
                            </div>
                            @endforeach
                        </div><!-- End recent posts list -->
                    </div>
                    <!-- Latest News End -->
                    {{ $results->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- Navtab End -->
@endsection

@push('js')
@endpush
