@extends('website.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">Search Results</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="text-decoration-none">Search Results</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->


    <!-- Navtab -->
    <section id="service-details" class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Search</h4>
                    <form action="{{ route('search-content') }}" method="get" class="searchForm">
                        <input type="search" name="SearchTerm" value="{{ request('SearchTerm') }}" class="form-control"
                            placeholder="Search">
                    </form>
                </div>
                <div class="col-md-8">
                    @if ($publications->count() === 0 && $services->count() === 0 && $news->count() === 0)
                        {{ 'No results found for query ' . request('SearchTerm') }}
                    @else
                        <h4>Search Results</h4>
                        <br>
                        @if($publications->count() > 0)
                        <ul>
                            <li><h2>Publications</h2></li>
                            @foreach ($publications as $data)
                                <li>
                                    <h4>{{ $data->title ?? '' }}</h4>
                                    <p>{!! strLimit($data->description,200) !!}</p>
                                    <a href="{{ route('publication-details', $data->slug) }}"
                                        class="btn default-btn">
                                        Read More <i class="fa-solid fa-angles-right"></i>
                                    </a>
                                </li>
                                <br>
                            @endforeach
                        </ul>
                        @endif
                        @if($news->count() > 0)
                        <br>
                        <ul>
                            <li><h2>News</h2></li>
                            @foreach ($news as $data)
                                <li>
                                    <h4>{{ $data->title ?? '' }}</h4>
                                    <p>{!! strLimit($data->description,200) !!}</p>
                                    <a href="{{ route('news-details', $data->slug) }}"
                                        class="btn default-btn">
                                        Read More <i class="fa-solid fa-angles-right"></i>
                                    </a>
                                </li>
                                <br>
                            @endforeach
                        </ul>
                        @endif
                        @if($services->count() > 0)
                        <br>
                        <ul>
                            <li><h2>Services</h2></li>
                            @foreach ($services as $data)
                                <li>
                                    <h4>{{ $data->title ?? '' }}</h4>
                                    <p>{!! strLimit($data->description,200) !!}</p>
                                    <a href="{{ route('news-details', $data->slug) }}"
                                        class="btn default-btn">
                                        Read More <i class="fa-solid fa-angles-right"></i>
                                    </a>
                                </li>
                                <br>
                            @endforeach
                        </ul>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Navtab End -->
@endsection

@push('js')
@endpush
