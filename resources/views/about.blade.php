@extends('welcome')
@section('title', 'About Us')
@section('content')
    <!-- Page Title
                                                                                                                                          ============================================= -->
    <section class="page-title page-title-center bg-transparent">
        <div class="container">
            <div class="page-title-row">

                <div class="page-title-content">
                    <h1>About Us</h1>
                    <span>What we do</span>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>

            </div>
        </div>
    </section><!-- .page-title end -->

    <!-- Content
                                                                                                                                          ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading-block border-bottom-0 mb-4">
                            <h3>What We Do</h3>
                            <span>Provides an extensive list of services to meet your
                                construction needs. We specialize in commercial, industrial, and civic /
                                non-profit projects. Our experienced team can deliver a wide variety of trades
                                to suit your business’s needs.</span>
                        </div>
                        <p>With a long history of successful construction
                            projects will have the experience and expertise to get the job done right. They
                            will also have a network of suppliers and subcontractors that can help them
                            deliver the project on time and within budget.</p>
                    </div>

                    <div class="col-lg-6">
                        <div class="fslider flex-thumb-grid grid-6" data-pagi="false" data-arrows="false"
                            data-thumbs="true">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide" data-thumb="{!! asset('webpage/ptmmi/projects/miniple-mmi-1.png') !!}">
                                        <img src="{!! asset('webpage/ptmmi/projects/miniple-mmi-1.png') !!}" alt="Image">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-end">
                                                <div class="h4 fw-light bg-light text-dark px-3 py-2">PEMANCANGAN MINIPILE
                                                    PT MMI-ADHI KARYA
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide" data-thumb="{!! asset('webpage/ptmmi/projects/miniple-mmi-2.png') !!}">
                                        <img src="{!! asset('webpage/ptmmi/projects/miniple-mmi-2.png') !!}" alt="Image">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-end">
                                                <div class="h4 fw-light bg-light text-dark px-3 py-2">PEMANCANGAN MINIPILE
                                                    PT MMI-ADHI KARYA
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide" data-thumb="{!! asset('webpage/ptmmi/projects/miniple-mmi-3.png') !!}">
                                        <img src="{!! asset('webpage/ptmmi/projects/miniple-mmi-3.png') !!}" alt="Image">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-end">
                                                <div class="h4 fw-light bg-light text-dark px-3 py-2">PEMANCANGAN MINIPILE
                                                    PT MMI-ADHI KARYA
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide" data-thumb="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-1.png') !!}">
                                        <img src="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-1.png') !!}" alt="Image">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-end">
                                                <div class="h4 fw-light bg-light text-dark px-3 py-2">Pembangunan Gardu/JPL
                                                    Perlintasan Kereta Api
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide" data-thumb="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-2.png') !!}">
                                        <img src="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-2.png') !!}" alt="Image">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-end">
                                                <div class="h4 fw-light bg-light text-dark px-3 py-2">Pembangunan Gardu/JPL
                                                    Perlintasan Kereta Api
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="section row p-0 align-items-stretch dark mt-5">
                <div class="col-lg-4 d-none d-md-block min-vh-50"
                    style="background: url('{!! asset('webpage/demos/construction/images/services/parallax.jpg') !!}') center center repeat; background-size: cover;">
                    <div>&nbsp;</div>
                </div>
                <div class="col-lg-8">
                    <div class="col-padding">

                        <div class="row align-items-stretch g-5">
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/building.png') !!}"
                                                alt="Concrete Developments"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Experience and expertise</h3>
                                        <p>with a long history of successful construction projects will have the experience
                                            and expertise to get the job done right. They will also have a network of
                                            suppliers and subcontractors that can help them deliver the project on time and
                                            within budget.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/bank.png') !!}" alt="Finance Assistance"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Quality of work</h3>
                                        <p>consistently delivers high-quality work will build a reputation for excellence.
                                            This will make them more attractive to potential clients and help them win new
                                            projects.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/traffic-cone.png') !!}" alt="Smart Builders"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>On-time delivery</h3>
                                        <p>consistently delivers projects on time will be more reliable and trustworthy to
                                            potential clients. This is important in the construction industry, where delays
                                            can be costly and disruptive.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/paper-money.png') !!}"
                                                alt="Quality Infrastructure"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Flexibility</h3>
                                        <p>flexible and adaptable will be able to handle changes in the project scope or
                                            schedule. This is important in the construction industry, where unforeseen
                                            challenges are common.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/traffic-cone.png') !!}" alt="Interiorly Designed"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Good communication</h3>
                                        <p>communicates effectively with its clients and project team will be more likely to
                                            avoid problems and delays. They will also be able to build trust and rapport
                                            with their clients, which is essential for long-term success.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/paint-brush.png') !!}"
                                                alt="Cost Effective Solutions"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Safety</h3>
                                        <p>prioritizes safety will create a positive work environment for its employees and
                                            reduce the risk of accidents. This is important in the construction industry,
                                            where accidents can be costly and even fatal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row g-5 mb-6">

                    <div class="col-lg-7">
                        <h4>Our Dedicated Team</h4>

                        <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20"
                            data-nav="true" data-pagi="true" data-items-xs="2" data-items-xl="3">

                            <div class="oc-item">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{!! asset('webpage/demos/construction/images/team/dan.jpg') !!}" alt="Dani">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="#">
                                                <h4>Dani</h4>
                                            </a><span>Komisaris</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{!! asset('webpage/demos/construction/images/team/ruth.jpg') !!}" alt="Ruth Anggraini">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="#">
                                                <h4>Ruth Anggraini</h4>
                                            </a><span>Direktur</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{!! asset('webpage/demos/construction/images/team/boy.jpg') !!}" alt="Boyke Marcos">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="#">
                                                <h4>Boyke Marcos</h4>
                                            </a><span>Board</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{!! asset('webpage/demos/construction/images/team/ade.jpg') !!}" alt="Ade Sahputra">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="#">
                                                <h4>Ade Sahputra</h4>
                                            </a><span>Board</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{!! asset('webpage/demos/construction/images/team/sam.jpg') !!}" alt="Samuel">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="#">
                                                <h4>Samuel</h4>
                                            </a><span>Project Manager</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{!! asset('webpage/demos/construction/images/team/marc.jpg') !!}" alt="Marcos">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="#">
                                                <h4>Marcos</h4>
                                            </a><span>Quality manager</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{!! asset('webpage/demos/construction/images/team/bin.jpg') !!}" alt="Bintang Jeremia">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="#">
                                                <h4>Bintang Jeremia</h4>
                                            </a><span>Developer</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{!! asset('webpage/demos/construction/images/team/1.jpg') !!}" alt="Josh Thompson">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="#">
                                                <h4>Josh Thompson</h4>
                                            </a><span>Project leader</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{!! asset('webpage/demos/construction/images/team/2.jpg') !!}" alt="Mary Jane">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="#">
                                                <h4>Mary Jane</h4>
                                            </a><span>Quality manager</span></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5">
                        <h4>Clients Overview</h4>

                        <p>We prize our Clients more than everything else. We strive to provide Quality Services to all our
                            Clients on a Priority Basis. You are invited to join our Clients List and enjoy our Services.
                        </p>

                        <ul class="clients-grid row row-cols-2 row-cols-sm-3 grid-border">
                            <li class="col-padding"><a href="#"><img src="{!! asset('webpage/images/clients/1.png') !!}"
                                        alt="Clients"></a></li>
                            <li class="col-padding"><a href="#"><img src="{!! asset('webpage/images/clients/2.png') !!}"
                                        alt="Clients"></a></li>
                            <li class="col-padding"><a href="#"><img src="{!! asset('webpage/images/clients/3.png') !!}"
                                        alt="Clients"></a></li>
                            <li class="col-padding"><a href="#"><img src="{!! asset('webpage/images/clients/4.png') !!}"
                                        alt="Clients"></a></li>
                            <li class="col-padding"><a href="#"><img src="{!! asset('webpage/images/clients/5.png') !!}"
                                        alt="Clients"></a></li>
                            <li class="col-padding"><a href="#"><img src="{!! asset('webpage/images/clients/6.png') !!}"
                                        alt="Clients"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <a href="/sc/business/profile/2023" target="_blank"
                class="button button-3d border-bottom-0 mt-4 button-full text-center fw-light font-primary"
                style="font-size: 26px;">
                <div class="container">
                    Would you like to see our company profile? <strong>Click here</strong> <i class="uil uil-angle-right-b"
                        style="top:3px;"></i>
                </div>
            </a>
        </div>
    </section>
@endsection
