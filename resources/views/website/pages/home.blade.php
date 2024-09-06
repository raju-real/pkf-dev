@extends('website.layouts.app')
@section('title')
@push('css')
    
@endpush

@section('content')
<div id="Carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach(allSliders() as $slider)
        <li data-target="#Carousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' :'' }}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach(allSliders() as $slider)
        <div class="Blue carousel-item {{ $loop->first ? 'active' : '' }}"> <img class="d-block w-100"
                src="{{ asset($slider->image) }}"
                alt="Global expertise with local knowledge">
            <div>
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                @if($slider->image !== Null)
                <a href="{{ $slider->link ?? '#' }}">{{ $slider->button_name ?? "Click Here" }}</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" role="button" href="#Carousel" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" role="button" href="#Carousel" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section class='container p-3'>
    <h1>Welcome</h1>

    <div class="umb-grid" id="gridContent">
        <div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div>

                        <p>{{ siteSetting()['welcome_message'] ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>

</section>
<section id='iconstrip' class='container'>
    <div class='row mt-3 mb-3'>
        @foreach(allServices() as $service)
        <div class='col-4 col-md mb-3'>
            <a href="#" title="Service">
                @isset($service->icon)
                <img src="{{ asset($service->icon) }}" height="100" width="100"/>
                @endisset
                 {{ $service->title ?? "" }}
            </a>
        </div>
       @endforeach
    </div>
</section>

<section id='publications' class='bg4 p-3'>
    <div class='container p-3'>
        <a href="{{ route('all-publications') }}" class='corner-btn right'>See all publications</a>
        <h2>Publications</h2>
        <div class='row clear'>
            @foreach(allPublications() as $publication)
            <div class='col-sm-6 col-md-4 p-3'>
                <div class='publication-item p-3'
                    style="background-image:url('{{ asset($publication->image) }}');">
                    <h4><a href="{{ route('publication-details',$publication->slug) }}" title="Lorem ipsum dolor sit amet" class='txtshadow'>{{ strLimit($publication->title,100) }}</a></h4>
                    <a href='{{ route('publication-details',$publication->slug) }}' class='readmore'>View here</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class='container p-3 mt-3' id='homenews'>
    <div class='row'>
        @if(!empty(featuredNews()))
        <div class='col-md-5 h-100'>
            <div class='title p-3'>
                <span>{{ date('Y-m-d',strtotime(featuredNews()->created_at)) }}</span>
                <h2>{{ featuredNews()->title ?? "" }}</h2>
            </div>
            <img src="{{ asset(featuredNews()->image) }}" class="w-100"/>
            <a href="{{ route('news-details',featuredNews()->slug) }}" title="Read more" class="readmore newsitem1">Read more</a>
        </div>
        @endif
        
        <div class='col-md-7 p-3'>
            <a href="{{ route('all-news') }}" class='corner-btn right'>All News</a>
            <h2>Latest News</h2>
            <div class='row clear'>
                @foreach(allNews() as $news)
                <div class='col-md h-100'>
                    <div class='newsblock'>
                        <h5>{{ date('Y-m-d',strtotime($news->created_at)) }}</h5>
                        <h4>{{ strLimit($news->title,50) }}</h4>
                        <div class='short'>
                            <p>{!! strLimit($news->description,350) !!}</p>
                        </div>
                    </div>
                    <a class='readmore' href='{{ route('news-details',$news->slug) }}'>Read more</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
    
@endpush