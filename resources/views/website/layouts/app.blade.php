<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ siteSetting()['company_name'] ?? 'PKF BD' }}</title>
    <meta name="base-url" base_url="{!! url('/') !!}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/logo/favicon.ico" rel="icon">
    <link href="assets/img/logo/favicon.ico" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="{{ asset('assets/user/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/responsive.css') }}" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header sticky-top {{ url()->current() === url('/') ? '' : 'heading-2' }}">
        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <img src="assets/img/logo/pkf-2-logo.svg" alt="">
                </a>
                <nav id="navmenu" class="navmenu">
                    <ul>
                        @include('website.layouts.menus')
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none  bi bi-list"></i>
                </nav>
                <div class="end-menu">
                    <li class="d-flex align-items-center request-callback">
                        <a href="#">Request Call Back</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-globe"></i>
                            <span class="ln-title">English</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><span class="ln-active">Arabic</span></a></li>
                            <li><a class="dropdown-item" href="#"><span>Bangla</span></a></li>
                            <li><a class="dropdown-item" href="#"><span>English</span></a></li>
                        </ul>
                    </li>
                    <a class="search-trigger" href="javascript:void(0)"><i class="bi bi-search"></i></a>
                    <a class="bar-trigger search-content" href="javascript:void(0)">
                        <i class="bi bi-list"></i>
                    </a>
                    <div id="MainNav" class="">
                        <nav class="mt-2 mobile_menu_inner">
                            <div class="d-flex justify-content-end align-items-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-globe"></i>
                                        <span class="ln-title">English</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><span
                                                    class="ln-active">Arabic</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span>Bangla</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span>English</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="search-trigger-2" href="javascript:void(0)"><i
                                            class="bi bi-search"></i></a>
                                    <div id="mySearchbar-2" class="mySearchbar-2">
                                        <a href="javascript:void(0)" class="mySearchClosebtn search-content">
                                            <button type="button"
                                                class="btn search-btn search-content">Search</button>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span>Search:</span>
                                            <input type="text" class="form-control" placeholder="Enter Keywords">

                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <button class="btn bar-trigger-2" href="javascript:void(0)">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <ul class="m-menu">
                                @include('website.layouts.menus')
                            </ul>
                            <div class="NavSocial">
                                <a class="" href="#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a class="" href="#">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a class="" href="#">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a class="" href="#">
                                    <i class="bi bi-wechat"></i>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div id="mySearchbar" class="mySearchbar">
            <a href="javascript:void(0)" class="mySearchClosebtn">
                <button class="btn search-btn search-content">Search</button>
            </a>
            <div class="d-flex align-items-center">
                <span>Search:</span>
                <input type="text" name="SearchTerm" value="{{ request('SearchTerm') }}" class="form-control search-content-box"
                      placeholder="Search">
            </div>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer light-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">
                            <img src="assets/img/logo/pkf-2-logo.svg" alt="">
                        </span>
                    </a>

                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Follow Us</h4>
                            <div class="social-links d-flex mt-4">
                                <a href="{{ siteSetting()['facebook_url'] ?? '#' }}"><i class="bi bi-facebook"></i></a>
                                <a href="{{ siteSetting()['linkedin_url'] ?? '#' }}"><i class="bi bi-linkedin"></i></a>
                                <a href="{{ siteSetting()['instagram_url'] ?? '#' }}"><i class="bi bi-instagram"></i></a>
                                <a href="{{ siteSetting()['wechat_url'] ?? '#' }}"><i class="bi bi-wechat"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="#">Audit & Assurance</a></li>
                                <li><a href="#">Tax</a></li>
                                <li><a href="#">Advisory</a></li>
                                <li><a href="#">Corporate Service</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Links</h4>
                            <ul>
                                <li><a href="#">PKF Shenzhen</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">PKF.com</a></li>
                                <li><a href="#">WeChat</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Resource</h4>
                            <ul>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Cookie Policy</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright mt-4">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <p>© <strong class="px-1 sitename">{{ siteSetting()['company_name'] ?? 'PKF' }}</strong> 
                        <span>{{ date('Y',strtotime(now())) }}</span>
                        <span>.All Rights Reserved</span>
                    </p>
                </div>
                <div class="col-md-6 col-lg-8">
                    <p>{!! siteSetting()['footer_text'] ?? '' !!}</p>
                </div>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/user/js/main.js') }}"></script>
    <script src="{{ asset('assets/user/js/custom.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

      $(document).on('click', '.search-content', function() {
          const searchTerm = $('.search-content-box').val();
          window.location.href = `search?SearchTerm=${encodeURIComponent(searchTerm)}`;
      });
  
      $(document).on('keydown', '.search-content-box', function(event) {
          if (event.key === 'Enter') { // Check if Enter key is pressed
              event.preventDefault(); // Prevent the default form submission
              const searchTerm = $('.search-content-box').val();
              window.location.href = `search?SearchTerm=${encodeURIComponent(searchTerm)}`;
          }
      });
  </script>
  @stack('js')
  

</body>

</html>
