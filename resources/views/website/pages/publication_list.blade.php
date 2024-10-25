@extends('website.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">Publications</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="text-decoration-none">Publications</li>
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
                        @foreach (publicationCategories() as $category)
                            <li class="{{ $loop->first ? 'active' : '' }}">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <a
                                        href="{{ route('all-publications', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                </div>
                                {{-- <ul class="inner-log">
                    <li>
                      <a href="javascript:void(0)">Audit</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">IPO</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">HKFRS / IFRS</a>
                    </li>
                  </ul> --}}
                            </li>
                        @endforeach
                    </ul>
                    <br>
                    <h4>Publications Search</h4>
                    <form action="{{ route('all-publications') }}" method="get" class="searchForm">
                        <input type="search" name="SearchTerm" value="{{ request('SearchTerm') }}" class="form-control"
                            placeholder="Search">
                    </form>
                </div>
                <div class="col-md-8">
                    <!-- Latest News -->
                    <div id="latest-news" class="latest-news">
                        <div class="section-common-heading">
                            <h2>Publications</h2>
                        </div>
                        <div class="row gy-4">
                            @foreach ($results as $publication)
                                @if ($loop->index <= 3)
                                    <div class="col-xl-6 col-md-12">
                                        <article>
                                            <div class="d-flex align-items-center">
                                                <div class="post-meta">
                                                    <p class="post-date">
                                                        <small></small>
                                                        <span class="mr-2">{{ $publication->category->name ?? '' }}</span>
                                                        <time datetime="{{ date('Y-m-d', strtotime($publication->created_at)) }}">{{ date('Y-m-d', strtotime($publication->created_at)) }}</time>
                                                    </p>
                                                </div>
                                            </div>
                                            <h2 class="title">
                                                <a href="{{ route('publication-details', $publication->slug) }}">{{ $publication->title ?? '' }}</a>
                                            </h2>
                                            <div class="post-img">
                                                <img src="{{ asset($publication->image) }}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </article>
                                    </div>
                                @endif
                            @endforeach
                        </div><!-- End recent posts list -->
                    </div>
                    <!-- Latest News End -->


                    <!-- Insight Newsletter -->
                    <div id="insights-newsletter" class="insights-newsletter">
                        <ul>
                            @foreach ($results as $publication)
                            @if ($loop->index >= 4)
                            <li>
                                <h4>{{ $publication->category->name ?? '' }} <span class="date-area">- {{ date('Y-m-d', strtotime($publication->created_at)) }}</span></h4>
                                <h2>{{ $publication->title ?? '' }}</h2>
                                <a href="{{ route('publication-details', $publication->slug) }}" class="btn default-btn">Read More <i
                                        class="fa-solid fa-angles-right"></i></a>
                            </li>
                            @endif
                           @endforeach
                        </ul>
                    </div>
                    <!-- Insight Newsletter End -->
                    {{ $results->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- Navtab End -->
@endsection

@push('js')
@endpush
