@extends('website.layouts.app')
@section('title')
    @push('css')
    @endpush

@section('content')
    <section class="heading headerMedium Blue"
        style="
          background-image: url('{{ asset('assets/website/media/people-690810.jpg') }}');
          background-repeat: no-repeat;
          background-size: cover;
        ">
        <div class="container">
            <h2>
                <p> Publications</p>
            </h2>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav class="subnav">
                        <ul>
                            @foreach (publicationCategories() as $category)
                                <li>
                                    <a href="{{ route('all-publications', ['category' => $category->slug]) }}"
                                        title="{{ $category->name }}">{{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                    <h4>Publications Search</h4>
                    <form action="{{ route('all-publications') }}" method="get" class="searchForm">
                        <input type="text" name="SearchTerm" value="{{ request('SearchTerm') }}">
                        <button type="submit" class="mag-btn" title="search"></button>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="crumbs mt-md-0 mt-sm-4">
                        <a href="homt.html" title="Home">Home</a>
                        <span>Publications</span>
                    </div>
                    <article>
                        <h1>Publications</h1>
                    </article>
                    <div class="row gridbg">
                        @foreach ($results as $publication)
                            @if ($loop->index <= 3)
                                <div class="col-md-6 p-3 list-item">
                                    <div class="title-image p-2"
                                        style="background-image:url('{{ asset($publication->image) }}')">
                                        <a href="{{ route('publication-details', $publication->slug) }}"
                                            title="{{ $publication->title ?? '' }}">
                                            <h3>{{ $publication->title ?? '' }}</h3>
                                        </a>
                                        @isset($publication->file)
                                            <a class="corner-btn" href="{{ asset($publication->file) }}"
                                                title="{{ $publication->title ?? '' }}" target="_blank">Download File</a>
                                        @endisset
                                    </div>

                                    <h5 class="mt-3">{{ $publication->category->name ?? '' }}
                                        {{ date('Y-m-d', strtotime($publication->created_at)) }} </h5>
                                    <h4 class="mt-3">{{ $publication->title ?? '' }}</h4>
                                    <p></p>
                                    <p>{!! strLimit($publication->description, 200) !!}</p>
                                    <p></p>
                                    <a class="readmore" href="{{ route('publication-details', $publication->slug) }}"
                                        title="Read more">Read more</a>
                                </div>
                            @endif
                        @endforeach
                        @foreach ($results as $publication)
                            @if ($loop->index >= 4)
                                <div class="p-3 list-item col-12">
                                    <h5 class="mt-3">{{ $publication->category->name ?? '' }}
                                        {{ date('Y-m-d', strtotime($publication->created_at)) }}</h5>
                                    <h4 class="mt-3">L{{ $publication->title ?? '' }}</h4>
                                    <p>{!! strLimit($publication->description, 200) !!}</p>
                                    <a class="readmore" href="{{ route('publication-details', $publication->slug) }}"
                                        title="Read more">Read more</a>
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
