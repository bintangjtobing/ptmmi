<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="Boxity Central Indonesia">
    <meta name="description"
        content="PT Malam Mas Inti is a full-service construction company that specializes in residential, industrial and commercial projects. We have over 20 years of experience and a team of experienced and professional builders. We are committed to providing our clients with the highest quality construction services at competitive prices.">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{!! asset('webpage/style.css?' . rand(10000, 99999)) !!}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{!! asset('webpage/css/font-icons.css?' . rand(10000, 99999)) !!}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{!! asset('webpage/css/swiper.css?' . rand(10000, 99999)) !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('webpage/demos/construction/construction.css?' . rand(10000, 99999)) !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('webpage/css/custom.css?' . rand(10000, 99999)) !!}">
    <link rel="shortcut icon" href="{!! asset('webpage/ptmmi/just-logo.png') !!}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title
 ============================================= -->
    <title>@yield('title') | PT Malam Mas Inti</title>

    {{-- Meta --}}
    <meta name="og:title" property="og:title" content="@yield('title') | PT Malam Mas Inti" />
    <meta name="og:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image" content="{!! asset('webpage/ptmmi/cover.php') !!}" />
    <meta name="og:description" property="og:description"
        content="PT Malam Mas Inti is a full-service construction company that specializes in residential, industrial and commercial projects. We have over 20 years of experience and a team of experienced and professional builders. We are committed to providing our clients with the highest quality construction services at competitive prices." />
    <meta name="twitter:card" content="@yield('title') | PT Malam Mas Inti" />
    <meta name="twitter:title" property="og:title" content="@yield('title') | PT Malam Mas Inti" />
    <meta name="twitter:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image" content="{!! asset('webpage/ptmmi/cover.php') !!}" />
    <meta name="twitter:description" property="og:description"
        content="PT Malam Mas Inti is a full-service construction company that specializes in residential, industrial and commercial projects. We have over 20 years of experience and a team of experienced and professional builders. We are committed to providing our clients with the highest quality construction services at competitive prices." />
    <link rel="canonical" href="{{ Request::url() }}/" />
    <link rel="shortcut icon" href="{!! asset('webpage/ptmmi/just-logo.png') !!}" type="image/png" type="image/png" sizes="64x64" />
    <meta name="og:email" content="info@malammasinti.com" />
    <meta name="og:phone_number" content="08126030120" />
    <meta name="og:latitude" content="3.573395" />
    <meta name="og:longitude" content="98.631085" />
    <meta name="og:street-address" content="Jalan Abadi Komplek Abadi Palace Tanjung Rejo, Medan Sunggal " />
    <meta name="og:locality" content="Sumatera Utara" />
    <meta name="og:region" content="ID" />
    <meta name="og:postal-code" content="20122" />
    <meta name="og:country-name" content="Indonesia" />

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">

        <!-- Top Bar
  ============================================= -->
        <div id="top-bar">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">

                        <!-- Top Social
      ============================================= -->
                        <ul id="top-social">
                            <li><a href="#" class="h-bg-facebook"><span class="ts-icon"><i
                                            class="fa-brands fa-facebook-f"></i></span><span
                                        class="ts-text">Facebook</span></a></li>
                            <li><a href="#" class="h-bg-instagram"><span class="ts-icon"><i
                                            class="fa-brands fa-instagram"></i></span><span
                                        class="ts-text">Instagram</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>

                    <div class="col-12 col-md-auto">

                        <!-- Top Links
      ============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="#">OFFICE</a>
                                    <ul class="top-links-sub-menu">
                                        <li class="top-links-item"><a href="https://goo.gl/maps/92ipKeN8rdDrATtTA"
                                                target="_blank">Medan</a></li>
                                    </ul>
                                </li>
                                <li class="top-links-item"><a href="faqs">FAQs</a></li>
                                <li class="top-links-item"><a href="contact">Contact</a></li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>
                </div>

            </div>
        </div><!-- #top-bar end -->

        <!-- Header
  ============================================= -->
        <header id="header" class="header-size-sm" data-sticky-shrink="false">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
     ============================================= -->
                    <div id="logo" class="ms-auto ms-lg-0 me-lg-auto">
                        <a href="/">
                            <img class="logo-default img-fluid" style="max-width: 300px;padding: 10px 0;"
                                srcset="{!! asset('webpage/ptmmi/logo-long.png') !!}" src="{!! asset('webpage/ptmmi/logo-long.png') !!}"
                                alt="Malam Mas Inti Logo">
                        </a>
                    </div><!-- #logo end -->

                    <div class="header-misc d-none d-lg-flex">

                        <ul class="header-extras">
                            <li>
                                <i class="i-plain bi-telephone m-0"></i>
                                <div class="he-text">
                                    Call Us
                                    <span>(62) 812 6030 120</span>
                                </div>
                            </li>
                            <li>
                                <i class="i-plain bi-envelope m-0"></i>
                                <div class="he-text">
                                    Email Us
                                    <span>ptmalammasintipusat@gmail.com</span>
                                </div>
                            </li>
                            <li>
                                <i class="i-plain bi-pin m-0"></i>
                                <div class="he-text">
                                    Our Location
                                    <span>Jl Abadi Komp. Abadi Palace</span>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

            <div id="header-wrap">
                <div class="container">
                    <div
                        class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-center">


                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu with-arrows">

                            <ul class="menu-container">
                                <li class="menu-item current"><a class="menu-link" href="/">
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/about">
                                        <div>About Us</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#projects">
                                        <div>Projects</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item"><a class="menu-link" href="/projects/medan">
                                                <div>Medan</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="/projects/binjai">
                                                <div>Binjai</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="/projects/deli-serdang">
                                                <div>Deli Serdang</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#legality">
                                        <div>Legality</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item"><a class="menu-link" href="/sc/business/profile/2023"
                                                target="_blank">
                                                <div>Company Profile</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link"
                                                href="/sc/business/legal/sbu/41016" target="_blank">
                                                <div>SBU 41016</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link"
                                                href="/sc/business/legal/sbu/41019" target="_blank">
                                                <div>SBU 41019</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link"
                                                href="/sc/business/legal/pkr/06/2023" target="_blank">
                                                <div>Pernyataan Keputusan Rapat</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="/contact">
                                        <div>Contact</div>
                                    </a></li>
                            </ul>

                        </nav>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        @yield('content')

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="dark">
            <div class="container">

                <!-- Footer Widgets
    ============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row">
                        <div class="col-lg-9">
                            <div class="widget">

                                <img src="{!! asset('webpage/ptmmi/logo-long.png') !!}" alt="Malam Mas Inti - Footer Logo"
                                    class="alignleft"
                                    style="/*! margin-top: 8px; */ /*! padding-right: 18px; */ /*! border-right: 1px solid #4A4A4A; */max-width: 300px;padding: 10px 0;">

                                <p style="padding-top: 20px;">PT Malam Mas Inti is a full-service construction company
                                    that specializes in residential, industrial and commercial projects. We have over 20
                                    years of experience and a team of experienced and professional builders. We are
                                    committed to providing our clients with the highest quality construction services at
                                    competitive prices.
                                </p>

                            </div>
                        </div>

                        <div class="col-lg-3 mt-5 mt-lg-0">
                            <div class="widget">

                                <div class="row col-mb-30">
                                    <div class="col-12">
                                        <div class="footer-big-contacts">
                                            <span>Call Us:</span>
                                            (62) 812 6030 120
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="footer-big-contacts">
                                            <span>Send an Email:</span>
                                            ptmalammasintipusat@gmail.com
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="widget subscribe-widget">

                                <div class="row col-mb-30">
                                    <div class="col-12 col-sm-6">
                                        <a href="#" class="social-icon bg-dark h-bg-facebook mb-0 me-3">
                                            <i class="fa-brands fa-facebook-f"></i>
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="/social/facebook"><small class="d-block"><strong>Like
                                                    us</strong><br>on
                                                Facebook</small></a>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <a href="#" class="social-icon bg-dark h-bg-instagram mb-0 me-3">
                                            <i class="fa-brands fa-instagram"></i>
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="/social/instagram"><small class="d-block"><strong>Follow
                                                    us</strong><br>on
                                                Instagram</small></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->
            </div>

            <!-- Copyrights
   ============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row justify-content-between col-mb-30">
                        <div class="col-12 col-md-auto text-center text-md-start">
                            Copyrights &copy; 2023 PT Malam Mas Inti. All Rights Reserved by PT Boxity Central
                            Indonesia.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a
                                    href="#">Privacy Policy</a></div>
                        </div>

                        <div class="col-12 col-md-auto text-center text-md-end">
                            <div class="copyrights-menu copyright-links">
                                <a href="#">Home</a>/<a href="#">About Us</a>/<a
                                    href="#">Team</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="{!! asset('webpage/js/functions.js') !!}"></script>

</body>

</html>
