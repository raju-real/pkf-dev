@extends('website.layouts.app')

@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-12">
                            <h1 class="heading-title">Insights</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="text-decoration-none">Insights</li>
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
                        <article>
                            <h1>{{ $publication->category->name ?? '' }}</h1>
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <p>{{ $publication->title ?? '' }}</p>
                                    <div class="col-md-12">
                                        <img src="{{ asset($publication->image) }}" width="100%" height="auto" />
                                    </div>
                                    <br>
                                    <h5>{{ date('Y-m-d',strtotime($publication->created_at)) }}</h5>
                                    <p>{!! $publication->description ?? '' !!}</p>
                                </div>
                            </div>
                            @if ($publication->file)
                                <div class="text-center">
                                    <a target="_blank" href="{{ asset($publication->file) }}" class="btn default-btn mt-5">
                                        Download Publication
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
