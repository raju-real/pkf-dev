<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta property="og:url" content="https://www.pkf.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PKF BD" />
    <title> {{ siteSetting()['company_name'] ?? "PKF BD" }}</title>
    <link href="{{ asset('assets/website/Content/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/Content/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/PKF.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/website/scripts/jquery-3.0.0.min.js') }}"></script>

    <style>
        /* Make the navbar sticky */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #fff; /* Optional: Background color for navbar */
        }
    
        /* Align logo and navbar items side by side */
        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    
        /* Style for the logo */
        #LogoBox {
            display: flex;
            align-items: center;
        }
    
        #Logo {
            width: 150px; /* Adjust the width of the logo */
            height: 50px; /* Adjust the height of the logo */
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            display: block;
        }
    
        /* Style for the navbar items */
        .navbar-nav {
            display: flex;
            flex-direction: row;
            align-items: center;
        }
    
        .navbar-nav .nav-item {
            margin-left: 20px; /* Space between nav items */
        }
    
        .navbar-toggler {
            margin-left: auto;
        }
    
        /* Ensure the navbar is responsive */
        @media (max-width: 992px) {
            .navbar .container {
                flex-direction: column;
            }
    
            .navbar-nav {
                flex-direction: column;
            }
    
            #Logo {
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>

    <div id="LogoBox" class="container">
        <a href="{{ route('home') }}" id="Logo"
            style="background-image:url('{{ asset('assets/website/media/logo.png') }}');">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li id="StickyLogo"><a href="{{ route('home') }}"
                                style="background-image:url('{{ asset('assets/website/media/logo.png') }}');">Home</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}" title="Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="content.html" title="Content">Content</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" title="Dropdown"
                                id="navbarDropdownMenuLink-services" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu mega-menu-bg w-100" aria-labelledby="navbarDropdownMenuLink-services">
                                <div class="container">
                                    <div class="card-columns">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="d-none d-lg-block col-md-2 col-lg-2 pl-0 pr-0">
                                                        <img src="{{ asset('assets/website/media/icons/mega-nav-icon-advisory.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="col-sm-12 col-md-10 col-lg-10 pl-2">
                                                        <ul>
                                                            <li><a href="#">
                                                                    <h5>Menu Heading</h5>
                                                                </a></li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-body">
    
    
                                                <div class="row">
                                                    <div class="d-none d-lg-block col-md-2 col-lg-2 pl-0 pr-0">
                                                        <img src="{{ asset('assets/website/media/icons/mega-nav-icon-taxlegal.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="col-sm-12 col-md-10 col-lg-10 pl-2">
                                                        <ul>
                                                            <li><a href="#">
                                                                    <h5>Menu Heading</h5>
                                                                </a></li>
    
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="d-none d-lg-block col-md-2 col-lg-2 pl-0 pr-0">
                                                        <img src="{{ asset('assets/website/media/icons/mega-nav-icon-assurance.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="col-sm-12 col-md-10 col-lg-10 pl-2">
                                                        <ul>
                                                            <li><a href="#">
                                                                    <h5>Menu Heading</h5>
                                                                </a></li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class='' title="Menu Item">Menu
                                                                    Item</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="d-none d-lg-block col-md-2 col-lg-2 pl-0 pr-0">
                                                        <img src="{{ asset('assets/website/media/icons/mega-nav-icon-bussol.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="col-sm-12 col-md-10 col-lg-10 pl-2">
                                                        <ul>
                                                            <li><a href="#">
                                                                    <h5>Menu Heading</h5>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="d-none d-lg-block col-md-2 col-lg-2 pl-0 pr-0">
                                                        <img src="{{ asset('assets/website/media/icons/mega-nav-icon-corpfinance.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="col-sm-12 col-md-10 col-lg-10 pl-2">
                                                        <ul>
                                                            <li><a href="#">
                                                                    <h5>Menu Heading</h5>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="d-none d-lg-block col-md-2 col-lg-2 pl-0 pr-0">
                                                        <img src="{{ asset('assets/website/media/icons/mega-nav-icon-specialisthospitalityconsulting.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="col-sm-12 col-md-10 col-lg-10 pl-2">
                                                        <ul>
                                                            <li><a href="#">
                                                                    <h5>Menu Heading</h5>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="d-none d-lg-block col-md-2 col-lg-2 pl-0 pr-0">
                                                        <img src="{{ asset('assets/website/media/icons/mega-nav-icon-allservices.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="col-sm-12 col-md-10 col-lg-10 pl-2">
                                                        <ul>
                                                            <li><a href="#">
                                                                    <h5>Menu Heading</h5>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('all-publications') }}" title="Publications">Publications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('all-news') }}" title="News &amp; Events">News &amp; Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('peoples') }}" title="People">People</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('our-services') }}" title="Services">Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue">
        <div class="container">
            <div class="row py-4">

                <div class="col-sm py-2">
                    <h3>Footer Heading</h3>
                    <ul>
                        <li><a href="content.html" title="Content">Content</a></li>
                        <li><a href="#" title="Footer Item">Footer Item</a></li>
                        <li><a href="#" title="Footer Item">Footer Item</a></li>
                        <li><a href="#" title="Footer Item">Footer Item</a></li>
                        <li><a href="#" title="Footer Item">Footer Item</a></li>
                    </ul>
                </div>
                <div class="col-sm py-2">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#" title="Footer Item">Footer Item</a></li>
                        <li><a href="#" title="Footer Item">Footer Item</a></li>
                    </ul>
                </div>
                <div class="col-sm py-2">
                    <h3>Follow us on...</h3>
                    <ul>
                        <li><a href="{{ asset(siteSetting()['twitter_url']) ?? '#' }}" target="_blank" title="Twitter">Twitter</a></li>
                        <li><a href="{{ asset(siteSetting()['linkedin_url']) ?? '#' }}" target="_blank" title="LinkedIn">LinkedIn</a></li>
                        <li><a href="{{ asset(siteSetting()['facebook_url']) ?? '#' }}" target="_blank" title="Facebook">Facebook</a></li>
                        <li><a href="{{ asset(siteSetting()['instagram_url']) ?? '#' }}" target="_blank" title="Instagram">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-strap">
            <div class="container py-1 px-3">
                {{ date('Y',strtotime(today())) }} All Right Reserved | {{ siteSetting()['company_name'] ?? "PKF BD" }} </div>
        </div>
    </footer>
    <script src="{{ asset('assets/website/scripts/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/website/scripts/jquery.validate.unobtrusive.min.js') }}"></script>
    <script src="{{ asset('assets/website/scripts/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/website/scripts/custom-app.js') }}"></script>
    <script src="{{ asset('assets/website/scripts/BackToTop.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $('#Carousel').carousel();
        });
    </script>
    <!-- swipe start -->
    <script src='{{ asset('assets/website/scripts/jquery.touchSwipe.min.js') }}'></script>
    <script type="text/javascript">
        $("#Carousel").swipe({
            swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');
            },
            allowPageScroll: "vertical"
        });
    </script>
    <!-- swipe end -->

</body>

</html>
