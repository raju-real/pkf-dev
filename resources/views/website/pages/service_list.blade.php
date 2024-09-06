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
                <p> Services</p>
            </h2>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav class="subnav">
                        <ul class="list-unstyled">
                            @foreach(serviceCategories() as $category)
                            <li>
                                <!-- Category link that toggles collapse -->
                                <a href="#subcategory-{{ $category->id }}" data-toggle="collapse" aria-expanded="false" aria-controls="subcategory-{{ $category->id }}">
                                    {{ $category->name }}
                                </a>
                    
                                <!-- Collapsible subcategory list -->
                                <ul class="collapse list-unstyled" id="subcategory-{{ $category->id }}">
                                    @foreach($category->subcategories as $subcategory)
                                    <li>
                                        <a href="{{ route('our-services', ['category' => $category->slug, 'subcategory' => $subcategory->slug]) }}">
                                            {{ $subcategory->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                    
                    
                    
                    <h4>Service Search</h4>
                    <form action="{{ route('our-services') }}" method="get" class="searchForm">
                        <input type="text" name="SearchTerm" value="{{ request('SearchTerm') }}" />
                        <button type="submit" class="mag-btn" title="search"></button>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="crumbs mt-md-0 mt-sm-4">
                        <a href="{{ route('home') }}" title="Home">Home</a>
                        <span>Services</span>
                    </div>
                    <div class="row gridbg">
                        @foreach($results as $service)
                        @if($loop->index <= 4)
                        <div class="col-md-6 p-3 list-item">
                            <h5 class="mt-3">{{ $service->category->name ?? "" }} - {{ date('Y-m-d',strtotime($service->created_at)) }}</h5>
                            <h4 class="mt-3">{{ $service->title ?? "" }}</h4>
                            <p>{!! strLimit($service->description,200) !!}</p>
                            <a class="readmore" href="{{ route('service-details',$service->slug) }}" title="Read more">Read more</a>
                        </div>
                        @endif
                        @endforeach

                        @foreach($results as $service)
                        @if($loop->index >= 4)
                        <div class="p-3 list-item">
                            <h5 class="mt-3">{{ $service->category->name ?? "" }} - {{ date('Y-m-d',strtotime($service->created_at)) }}</h5>
                            <h4 class="mt-3">{{ $service->title ?? "" }}</h4>
                            <p>{!! strLimit($service->description,200) !!}</p>
                            <a class="readmore" href="{{ route('service-details',$service->slug) }}" title="Read more">Read more</a>
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
