@extends('website.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">Our People</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="text-decoration-none">Our People</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->


    <!-- Navtab -->
    <section id="service-details" class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Search Team Directory</h4>
                    <form method="get" class="searchForm" action="{{ route('peoples') }}">
                        <div class="form-group">
                            <label for="name"> Name: </label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ request('name') }}" placeholder="Name"/>
                        </div>
                        <div class="form-group my-3">
                            <label for="Department"> Department: </label>
                            <select class="form-select" id="Department" name="department">
                                <option value="">All</option>
                                @foreach (allDepartment() as $department)
                                    <option value="{{ $department->id }}"
                                        {{ request('department') && request('department') == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row my-3">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <a class="btn btn-sm btn-danger" href="{{ route('peoples') }}" title="Reset"><i class="fa fa-refresh"></i></a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <button type="submit" class="btn btn-sm btn-success float-end"
                                    title="search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <!-- Latest News -->
                    <div id="latest-news" class="latest-news">
                        <div class="section-common-heading">
                            <h2>Our People</h2>
                        </div>
                        <div class="row gy-4">
                            @foreach ($peoples as $people)
                                <div class="col-md-4 people-block">
                                    <img src="{{ asset($people->image) }}" alt="{{ $people->name ?? '' }}" class="img-responsive" height="400" width="100%"/>
                                    <h5 class="mt-3">{{ $people->name ?? '' }}</h5>
                                    <div></div>
                                    <a class="btn btn-md btn-primary btn-outline-success text-white border-primary" href="{{ route('people', $people->slug) }}"
                                        title="{{ $people->name ?? '' }}">View Profile</a>
                                </div>
                            @endforeach
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
