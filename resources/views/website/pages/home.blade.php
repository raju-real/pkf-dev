@extends('website.layouts.app')

@section('content')
    <!-- Hero Section -->
    <div id="hero_wrapper">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            @foreach(allSliders() as $slider)
            <div class="carousel-item Left carousel_custom_item Dark active" class="" style="background-color: {{ $slider->bg_color }};">
                <div class="">
                    <img class="" src="{{ asset($slider->image) }}">
                    <div class="tc-">
                        <h4>{{ $slider->title ?? "" }}</h4>
                        <h1>2024-25 Hong Kong Budget Summary 1</h1>
                        @if($slider->image !== Null)
                        <a href="{{ $slider->link ?? '#' }}">{{ $slider->button_name ?? "Click Here" }}</a>
                        @endif
                    </div>
                </div>
            </div><!-- End Carousel Item -->
            @endforeach

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
            <ol class="carousel-indicators"></ol>
        </div>
    </div><!-- /Hero Section -->


    <!-- Welcome Section -->
    <section id="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <h2 class="welcome-heading">
                        Welcome to <br>
                        <span class="pkf-heading">PKF Hong Kong</span>
                    </h2>
                </div>
                <div class="col-md-6 second-part">
                    <h2>{{ siteSetting()['Innovative business solutions in PKF'] ?? '' }}</h2>
                    <p>{{ siteSetting()['welcome_message'] ?? '' }}</p>
                    @if(Route::has('about-us'))
                    <a href="{{ route("about-us") }}" class="discover">Discover PKF Kong</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Section End-->

    <!-- Service And Solution -->
    <section id="service-and-solution" class="">
        <div class="container">
            <div class="section-common-heading">
                <h2>Services and solutions</h2>
                <a href="{{ route('our-services') }}" class="heading-common-btn">More</a>
            </div>
            <div class="service-body">
                @foreach(allServices() as $service)
                <a href="{{ route('service-details',$service->slug) }}" class="service-item">
                    @isset($service->icon)
                    <img src="{{ asset($service->icon) }}" alt="" height="100" width="100">
                    @endif
                    <p>{{ $service->title ?? "" }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Service And Solution End -->


    <!-- Publication -->
    <section id="publication" class="publication section-common-bg">
        <div class="container">
            <div class="section-common-heading">
                <h2>Publications</h2>
                <a href="{{ route('all-publications') }}" class="heading-common-btn">All Publication</a>
            </div>
            <div class="row">
                @foreach(allPublications() as $publication)
                <div class="col-md-4">
                    <a href="{{ route('publication-details',$publication->slug) }}" class="publication-item bg1 zoombackground">
                        <div style="background-image:url('{{ asset($publication->image) }}');"></div>
                        <h3>{{ strLimit($publication->title,100) }}</h3>
                        <button type="button" class="btn">Learn More <i class="fa-solid fa-angles-right"></i></button>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Publication End -->

    <!-- Latest News -->
    <section id="latest-news" class="latest-news">
        <div class="container">
            <div class="section-common-heading">
                <h2>Latest News</h2>
                <a href="{{ route('all-news') }}" class="heading-common-btn">All News</a>
            </div>
            <div class="row gy-4">
                @foreach(allNews() as $news)
                <div class="col-xl-4 col-md-6">
                    <article>
                        <div class="d-flex align-items-center">
                            <div class="post-meta">
                                <p class="post-date">
                                    <small></small>
                                    <span class="mr-2">Featured News</span>
                                    <time datetime="{{ date('Y-m-d',strtotime($news->created_at)) }}">{{ date('Y-m-d',strtotime($news->created_at)) }}</time>
                                </p>
                            </div>
                        </div>
                        <h2 class="title">
                            <a href="{{ route('news-details',$news->slug) }}">{{ strLimit($news->title,50) }}</a>
                        </h2>
                        <div class="post-img">
                            @if($news->image)
                            <img src="{{ asset($news->image) }}" alt="" class="img-fluid">
                            @endif
                        </div>
                    </article>
                </div>
                @endforeach
            </div><!-- End recent posts list -->
        </div>
    </section>
    <!-- Latest News End -->


    <section id="joinus" class="joinus section dark-background">
        <div class="container">
            <div class="content row justify-content-center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Want to be a part of PKF Hong Kong?</h3>
                        <a class="cta-btn" href="#">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
