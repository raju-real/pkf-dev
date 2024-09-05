@extends('website.layouts.app')
@section('title')
    @push('css')
    @endpush

@section('content')
    <section class="heading headerMedium Blue"
        style="
          background-image: url('{{ asset("assets/website/media/people-690810.jpg") }}');
          background-repeat: no-repeat;
          background-size: cover;
        ">
        <div class="container">
            <h2>
                <p> News & Events</p>
            </h2>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav class="subnav">
                        <ul>
                            @foreach(newsCategories() as $category)
                            <li>
                                <a href="{{ route('all-news',['category' => $category->slug]) }}" title="{{ $category->name }}">{{ $category->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                    <h4>News Search</h4>
                    <form action="{{ route('all-news') }}" method="get" class="searchForm">
                        <input type="text" name="SearchTerm" value="{{ request('SearchTerm') }}" />
                        <button type="submit" class="mag-btn" title="search"></button>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="crumbs mt-md-0 mt-sm-4">
                        <a href="{{ route('home') }}" title="Home">Home</a>
                        <span>PKF News &amp; Events</span>
                    </div>
                    <div class="row gridbg">
                        @foreach($results as $news)
                        @if($loop->index < 4)
                        <div class="col-md-6 p-3 list-item">
                            <img src="{{ asset($news->image) }}" />
                            <h5 class="mt-3">{{ $news->category->name ?? "" }} - {{ date('Y-m-d',strtotime($news->created_at)) }}</h5>
                            <h4 class="mt-3">{{ $news->title ?? "" }}</h4>
                            <p>{!! strLimit($news->description,400) !!}</p>
                            <a class="readmore" href="{{ route('news-details',$news->slug) }}" title="Read more">Read more</a>
                        </div>
                        @endif
                        
                        @if($loop->index > 3)
                        <div class="p-3 list-item">
                            <h5 class="mt-3">{{ $news->category->name ?? "" }} - {{ date('Y-m-d',strtotime($news->created_at)) }}</h5>
                            <h4 class="mt-3">{{ $news->title ?? "" }}</h4>
                            <p>{!! strLimit($news->description,400) !!}</p>
                            <a class="readmore" href="{{ route('news-details',$news->slug) }}" title="Read more">Read more</a>
                        </div>
                        @endif
                       @endforeach
                    </div>

                    <div class="pagination">
                        {{ $results->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
