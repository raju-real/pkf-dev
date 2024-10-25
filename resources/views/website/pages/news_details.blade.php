@extends('website.layouts.app')

@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-12">
                            <h1 class="heading-title">News</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="text-decoration-none">News</li>
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
                            @foreach (newsCategories() as $category)
                            <li class="{{ $loop->first ? 'active' : '' }}">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <a
                                        href="{{ route('all-news', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                        <br>
                        <h4>News Search</h4>
                        <form action="{{ route('all-news') }}" method="get" class="searchForm">
                            <input type="search" name="SearchTerm" value="{{ request('SearchTerm') }}" class="form-control"
                                placeholder="Search">
                        </form>
                    </div>
                    <div class="col-md-8">
                        <article>
                            <h1>{{ $news->category->name ?? '' }}</h1>
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <p>{{ $news->title ?? '' }}</p>
                                    <div class="col-md-12">
                                        <img src="{{ asset($news->image) }}" width="100%" height="auto" />
                                    </div>
                                    <br>
                                    <h5>{{ date('Y-m-d',strtotime($news->created_at)) }}</h5>
                                    <p>{!! $news->description ?? '' !!}</p>
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
