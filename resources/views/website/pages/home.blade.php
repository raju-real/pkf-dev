@extends('website.layouts.app')
@section('title')
@push('css')
    
@endpush

@section('content')
<div id="Carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#Carousel" data-slide-to="0" class=&#39;active&#39;></li>
        <li data-target="#Carousel" data-slide-to="1"></li>
        <li data-target="#Carousel" data-slide-to="2"></li>
        <li data-target="#Carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="Blue carousel-item active"> <img class="d-block w-100"
                src="{{ asset('assets/website/media/calculator-1680905_1920.jpg') }}"
                alt="Global expertise with local knowledge">
            <div>
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                <a href="#">Click Here</a>
            </div>
        </div>
        <div class="Blue carousel-item"> <img class="d-block w-100"
                src="{{ asset('assets/website/media/calculator-1680905_1920.jpg') }}"
                alt="The PKF network regional offices">
            <div>
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                <a href="#">Click here</a>
            </div>
        </div>
        <div class="Blue carousel-item"> <img class="d-block w-100"
                src="{{ asset('assets/website/media/calculator-1680905_1920.jpg') }}"
                alt="Latest news from across the PKF International network">
            <div>
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                <a href="#">Click here</a>
            </div>
        </div>
        <div class="Blue carousel-item"> <img class="d-block w-100"
                src="{{ asset('assets/website/media/calculator-1680905_1920.jpg') }}"
                alt="PKF Worldwide Tax Guide">
            <div>
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                <a href="#">Click here</a>
            </div>
        </div>
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

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>

</section>
<section id='iconstrip' class='container'>
    <div class='row mt-3 mb-3'>
        <div class='col-4 col-md mb-3'>
            <a href="#" title="Service">
                <img src="{{ asset('assets/website/media/icons/index-icon-assurance.png') }}" /> Service
            </a>
        </div>
        <div class='col-4 col-md mb-3'>
            <a href="#" title="Service">
                <img src="{{ asset('assets/website/media/icons/index-icon-taxlegal.png') }}" /> Service
            </a>
        </div>
        <div class='col-4 col-md mb-3'>
            <a href="#" title="Service">
                <img src="{{ asset('assets/website/media/icons/index-icon-advisory.png') }}" /> Service
            </a>
        </div>
        <div class='col-4 col-md mb-3'>
            <a href="#" title="Service">
                <img src="{{ asset('assets/website/media/icons/index-icon-bussol.png') }}" /> Service
            </a>
        </div>
        <div class='col-4 col-md mb-3'>
            <a href="#" title="Service">
                <img src="{{ asset('assets/website/media/icons/index-icon-corpfinance.png') }}" /> Service
            </a>
        </div>
        <div class='col-4 col-md mb-3'>
            <a href="#" title="Service">
                <img
                    src="{{ asset('assets/website/media/icons/index-icon-specialisthospitalityconsulting.png') }}" />
                Service
            </a>
        </div>
    </div>
</section>

<section id='publications' class='bg4 p-3'>
    <div class='container p-3'>
        <a href="publications.html" class='corner-btn right'>See all publications</a>
        <h2>Publications</h2>
        <div class='row clear'>
            <div class='col-sm-6 col-md-4 p-3'>
                <div class='publication-item p-3'
                    style="background-image:url('{{ asset('assets/website/media/default-image-620x600.jpg') }}');">
                    <h4><a href="#" title="Lorem ipsum dolor sit amet" class='txtshadow'>Lorem ipsum
                            dolor sit amet</a></h4>
                    <a href='publications.html' class='readmore'>View here</a>
                </div>
            </div>
            <div class='col-sm-6 col-md-4 p-3'>
                <div class='publication-item p-3'
                    style="background-image:url('{{ asset('assets/website/media/default-image-620x600.jpg') }}');">
                    <h4><a href="#" title="Lorem ipsum dolor sit amet" class='txtshadow'>Lorem ipsum
                            dolor sit amet</a></h4>
                    <a href='publications.html' class='readmore'>View here</a>
                </div>
            </div>
            <div class='col-sm-6 col-md-4 p-3'>
                <div class='publication-item p-3'
                    style="background-image:url('{{ asset('assets/website/media/default-image-620x600.jpg') }}');">
                    <h4><a href="#" title="Lorem ipsum dolor sit amet" class='txtshadow'>Lorem ipsum
                            dolor sit amet</a></h4>
                    <a href='publications.html' class='readmore'>View here</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='container p-3 mt-3' id='homenews'>
    <div class='row'>
        <div class='col-md-5 h-100'>
            <div class='title p-3'>
                <span>2021-02-19</span>
                <h2>Lorem ipsum dolor sit amet</h2>
            </div>
            <img src="{{ asset('assets/website/media/default-image-620x600.jpg') }}" class="w-100" />
            <a href="#" title="Read more" class="readmore newsitem1">Read more</a>
        </div>
        <div class='col-md-7 p-3'>
            <a href="news.html" class='corner-btn right'>All News</a>
            <h2>Latest News</h2>
            <div class='row clear'>
                <div class='col-md h-100'>
                    <div class='newsblock'>
                        <h5>2021-02-19</h5>
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <div class='short'>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                    <a class='readmore' href='news.html'>Read more</a>
                </div>
                <div class='col-md h-100'>
                    <div class='newsblock'>
                        <h5>2021-02-18</h5>
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <div class='short'>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                    <a class='readmore' href='news.html'>Read more</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
    
@endpush