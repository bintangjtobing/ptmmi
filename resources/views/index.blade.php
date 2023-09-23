@extends('welcome')
@section('title', 'Homepage')
@section('content')
    <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-75" data-loop="true">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption">
                            <div>
                                <h2>Welcome to Malam Mas Inti</h2>
                                <p class="d-none d-sm-block">Provides an extensive list of services to meet your
                                    construction needs. We specialize in commercial, industrial, and civic /
                                    non-profit projects. Our experienced team can deliver a wide variety of trades
                                    to suit your business’s needs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-bg"
                        style="background-image: url('{!! asset('webpage/demos/construction/images/slider/2.jpg') !!}'); background-position: center top;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption slider-caption-right">
                            <div>
                                <h2>Experience and expertise</h2>
                                <p class="d-none d-sm-block">With a long history of successful construction
                                    projects will have the experience and expertise to get the job done right. They
                                    will also have a network of suppliers and subcontractors that can help them
                                    deliver the project on time and within budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="video-wrap no-placeholder">
                        <video id="slide-video" poster="{!! asset('webpage/demos/construction/images/videos/1.jpg') !!}" preload="auto" loop autoplay muted
                            playsinline>
                            <source src='{!! asset('webpage/demos/construction/images/videos/1.webm') !!}' type='video/webm'>
                            <source src='{!! asset('webpage/demos/construction/images/videos/1.mp4') !!}' type='video/mp4'>
                        </video>
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption">
                            <div>
                                <h2>Quality of work</h2>
                                <p class="d-none d-sm-block">We consistently delivers high-quality work will build
                                    a reputation for excellence. This will make them more attractive to potential
                                    clients and help them win new projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-bg"
                        style="background-image: url('{!! asset('webpage/demos/construction/images/slider/1.jpg') !!}'); background-position: center bottom;">
                    </div>
                </div>
            </div>
            <div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
            <div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
        </div>

    </section>

    <!-- Content
                                                                        ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="promo promo-light promo-full promo-uppercase p-5 mb-6 header-stick">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg">
                            <h3 style="letter-spacing: 2px;">Call us today to see how we can help you with your
                                next project!</h3>
                            <span>We provides an extensive list of services to meet your
                                construction needs.</span>
                        </div>
                        <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                            <a href="https://wa.me/628126030120" target="_blank"
                                class="button button-large button-circle button-black m-0">Call us
                                now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row justify-content-center col-mb-50">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{!! asset('webpage/demos/construction/images/services/1.jpg') !!}" alt="Malam Mas Inti -Why choose Us?">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Safety & Skilled Professionals.<span class="subtitle">Your Property in Good
                                        Hands.</span></h3>
                                <p>We prioritizes safety will create a positive work environment for its employees
                                    and reduce the risk of accidents. This is important in the construction
                                    industry, where accidents can be costly and even fatal.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{!! asset('webpage/images/services/1.jpg') !!}" alt="Malam Mas Inti -Effective Planning">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>On-time delivery & Effective Planning.<span class="subtitle">Construction
                                        Process Organized.</span></h3>
                                <p>Consistently
                                    delivers projects on time will be more reliable and trustworthy to potential
                                    clients. This is important in the construction industry, where delays can be
                                    costly and disruptive.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{!! asset('webpage/demos/construction/images/services/2.jpg') !!}" alt="Malam Mas Inti -Why choose Us?">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Flexibility & Risk Management<span class="subtitle">We have got you
                                        Covered.</span></h3>
                                <p>Flexible and adaptable will be able to handle changes in the project scope or
                                    schedule. This is important in the construction industry, where unforeseen
                                    challenges are common.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section parallax dark" style="padding: 120px 0;">
                <img src="{!! asset('webpage/demos/construction/images/slider/1.jpg') !!}" class="parallax-bg">

                <div class="fslider" data-arrows="false" style="z-index: 2;">
                    <div class="owl-carousel carousel-widget text-center mw-xs mx-auto dark" data-items="1"
                        data-autoplay="5000" data-nav="false">
                        <div class="row">
                            <div class="col-12">
                                <img class="rounded-circle mx-auto w-auto mb-4" src="{!! asset('webpage/images/testimonials/1.jpg') !!}" width="64"
                                    height="64" alt="Malam Mas Inti -Customer Testimonails">
                                <h3 class="mb-4 lh-base fw-normal font-secondary">Saya sangat puas dengan jasa konstruksi
                                    bangunan dari PT. Malam Mas Inti. Mereka sangat profesional dan bertanggung jawab.
                                    Pekerjaannya rapi dan sesuai dengan spesifikasi. Saya sangat merekomendasikannya kepada
                                    siapa saja yang membutuhkan jasa konstruksi bangunan.</h3>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <div>
                                    <h4 class="h6 mb-0 fw-medium">Andi Budiman</h4>
                                    <small class="text-white-50">PT Bangun Jaya</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <img class="rounded-circle mx-auto w-auto mb-4" src="{!! asset('webpage/images/testimonials/2.jpg') !!}"
                                    width="64" height="64" alt="Malam Mas Inti -Customer Testimonails">
                                <h3 class="mb-4 lh-base fw-normal font-secondary">Saya baru saja membangun rumah dengan
                                    bantuan jasa konstruksi bangunan dari PT Malam Mas Inti. Saya sangat senang dengan
                                    hasilnya. Rumah saya dibangun dengan cepat dan berkualitas. Harganya juga terjangkau.
                                    Saya akan kembali menggunakan jasanya jika ada kebutuhan di masa depan.</h3>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <div>
                                    <h4 class="h6 mb-0 fw-medium">Tuti Hartati</h4>
                                    <small class="text-white-50">Customer</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <img class="rounded-circle mx-auto w-auto mb-4" src="{!! asset('webpage/images/testimonials/3.jpg') !!}"
                                    width="64" height="64" alt="Malam Mas Inti -Customer Testimonails">
                                <h3 class="mb-4 lh-base fw-normal font-secondary">Saya sangat terbantu dengan jasa
                                    konstruksi bangunan dari PT. Malam Mas Inti. Mereka membantu saya untuk merenovasi
                                    rumah saya yang sudah lama. Hasilnya sangat memuaskan. Rumah saya sekarang terlihat
                                    lebih modern dan nyaman. Saya sangat berterima kasih atas bantuan mereka.</h3>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <div>
                                    <h4 class="h6 mb-0 fw-medium">Budi Santoso</h4>
                                    <small class="text-white-50">Customer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="video-wrap" style="z-index: 1;">
                    <div class="video-overlay" style="background: rgba(241,128,82,0.9);"></div>
                </div>

            </div>

            <div class="container">

                <div class="row align-items-stretch col-mb-50">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/building.png') !!}"
                                        alt="Malam Mas Inti -Concrete Developments"></a>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/bank.png') !!}"
                                        alt="Malam Mas Inti -Finance Assistance"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Quality of work</h3>
                                <p>consistently delivers high-quality work will build a reputation for excellence.
                                    This will make them more attractive to potential clients and help them win new
                                    projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/traffic-cone.png') !!}"
                                        alt="Malam Mas Inti -Interiorly Designed"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>On-time delivery</h3>
                                <p>consistently delivers projects on time will be more reliable and trustworthy to
                                    potential clients. This is important in the construction industry, where delays
                                    can be costly and disruptive.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/paper-money.png') !!}"
                                        alt="Malam Mas Inti -Cost Effective Solutions"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Flexibility</h3>
                                <p>flexible and adaptable will be able to handle changes in the project scope or
                                    schedule. This is important in the construction industry, where unforeseen
                                    challenges are common.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/traffic-cone.png') !!}"
                                        alt="Malam Mas Inti -Smart Builders"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Good communication</h3>
                                <p>communicates effectively with its clients and project team will be more likely to
                                    avoid problems and delays. They will also be able to build trust and rapport
                                    with their clients, which is essential for long-term success.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/paint-brush.png') !!}"
                                        alt="Malam Mas Inti -Quality Infrastructure"></a>
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

            <div class="section mb-0">
                <h2 class="text-center mb-0 ls-1">Some of Our Esteemed Projects:</h2>
            </div>

            <div id="portfolio" class="portfolio row grid-container g-0">

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <img src="{!! asset('webpage/ptmmi/projects/miniple-mmi-1.png') !!}"
                                alt="Malam Mas Inti - PEMANCANGAN MINIPILE PT MMI-ADHI KARYA">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                        data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                        data-hover-speed="350"><i class="uil uil-ellipsis-h"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">PEMANCANGAN MINIPILE PT MMI-ADHI KARYA</a></h3>
                            <span>Medan, ID</span>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-illustrations">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <img src="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-1.png') !!}"
                                alt="Malam Mas Inti - Pembangunan Gardu/JPL Perlintasan Kereta Api">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                        data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                        data-hover-speed="350"><i class="uil uil-ellipsis-h"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3>Pembangunan Gardu/JPL Perlintasan Kereta Api</h3>
                            <span>Medan, ID</span>
                        </div>
                    </div>
                </article>

            </div>

            <a href="/sc/business/profile/2023" target="_blank"
                class="button button-3d border-bottom-0 mt-4 button-full text-center fw-light font-primary"
                style="font-size: 26px;">
                <div class="container">
                    Would you like to see our company profile? <strong>Click here</strong> <i class="uil uil-angle-right-b"
                        style="top:3px;"></i>
                </div>
            </a>

            <div class="container mt-6 cleafix">

                <div class="row col-mb-50">
                    <div class="col-md-8">

                        <ul class="nav canvas-tabs tabs nav-tabs nav-fill mb-3" id="construction-tabs" role="tablist"
                            style="--bs-nav-link-font-weight: 500;">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="construction-tab-1" data-bs-toggle="pill"
                                    data-bs-target="#tab-1" type="button" role="tab"
                                    aria-controls="construction-tab-1" aria-selected="true">Why Us?</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="construction-tab-2" data-bs-toggle="pill"
                                    data-bs-target="#tab-2" type="button" role="tab"
                                    aria-controls="construction-tab-2" aria-selected="false">Work Ethic</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="construction-tab-3" data-bs-toggle="pill"
                                    data-bs-target="#tab-3" type="button" role="tab"
                                    aria-controls="construction-tab-3" aria-selected="false">Team</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="construction-tab-4" data-bs-toggle="pill"
                                    data-bs-target="#tab-4" type="button" role="tab"
                                    aria-controls="construction-tab-4" aria-selected="false">Locations</button>
                            </li>
                        </ul>

                        <div id="canvas-TabContent" class="tab-content">

                            <div class="tab-pane show active" id="tab-1" role="tabpanel"
                                aria-labelledby="canvas-tab-1" tabindex="0">
                                <p>We have over 20 years of experience in the construction industry, licensed and
                                    insured, so you can be confident that your project is in good hands, have a team
                                    of experienced and skilled professionals who are dedicated to providing you with
                                    the highest quality of work, offer competitive pricing and flexible payment
                                    terms, committed to on-time delivery and meeting your specific needs, value
                                    communication and transparency throughout the construction process, committed to
                                    safety and sustainability, a family-owned and operated business, so you can be
                                    sure that you are dealing with a company that cares about its customers.</p>
                                <div class="row col-mb-30">
                                    <div class="col-sm-6 col-lg-3 text-center">
                                        <div class="counter ls-1 fw-semibold" style="color: #D2D2D2;"><span
                                                data-from="100" data-to="964" data-refresh-interval="50"
                                                data-speed="2000"></span></div>
                                        <h5>Floors Built</h5>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 text-center">
                                        <div class="counter ls-1 fw-semibold" style="color: #D2D2D2;"><span
                                                data-from="100" data-to="8514" data-refresh-interval="50"
                                                data-speed="2500"></span></div>
                                        <h5>Employees</h5>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 text-center">
                                        <div class="counter ls-1 fw-semibold" style="color: #D2D2D2;"><span
                                                data-from="100" data-to="458" data-refresh-interval="50"
                                                data-speed="3500"></span></div>
                                        <h5>Happy Clients</h5>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 text-center">
                                        <div class="counter ls-1 fw-semibold" style="color: #D2D2D2;"><span
                                                data-from="14" data-to="159" data-refresh-interval="15"
                                                data-speed="2700"></span></div>
                                        <h5>Cities Served</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2" role="tabpanel" aria-labelledby="canvas-tab-2"
                                tabindex="0">
                                <p>
                                <ol>
                                    <li>We believe in a strong work ethic and are committed to providing our clients
                                        with
                                        the highest quality of work.</li>
                                    <li>Our employees are dedicated and hardworking, and they are always willing to
                                        go
                                        the extra mile to get the job done.</li>
                                    <li>We have a zero-tolerance policy for laziness or shortcuts, and we expect our
                                        employees to always be professional and courteous.</li>
                                    <li>We believe that hard work and dedication are essential for success in the
                                        construction industry, and we are proud to have a team of employees who
                                        share
                                        our values.</li>
                                    <li>We are committed to providing our employees with the training and resources
                                        they
                                        need to succeed, and we offer competitive wages and benefits.</li>
                                    <li>We believe that a positive work environment is essential for productivity,
                                        and
                                    <li>we are committed to creating a safe and respectful workplace for all of our
                                        employees.</li>
                                </ol>
                                </p>
                            </div>
                            <div class="tab-pane" id="tab-3" role="tabpanel" aria-labelledby="canvas-tab-3"
                                tabindex="0">
                                <p>Have a team
                                    of experienced and skilled professionals who are dedicated to providing you with
                                    the highest quality of work.</p>
                                <div class="row col-mb-30">
                                    <div class="col-sm-6 col-md-4">
                                        <ul class="iconlist mb-0">
                                            <li><i class="fa-solid fa-check"></i> 100% Assurance</li>
                                            <li><i class="fa-solid fa-check"></i> Hard Working</li>
                                            <li><i class="fa-solid fa-check"></i> Trustworthy</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <ul class="iconlist mb-0">
                                            <li><i class="fa-solid fa-check"></i> Intelligent</li>
                                            <li><i class="fa-solid fa-check"></i> Always Curious</li>
                                            <li><i class="fa-solid fa-check"></i> Perfectionists</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <ul class="iconlist mb-0">
                                            <li><i class="fa-solid fa-check"></i> Friendly &amp; Helpful</li>
                                            <li><i class="fa-solid fa-check"></i> Accomodating Nature</li>
                                            <li><i class="fa-solid fa-check"></i> Available 24x7</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4" role="tabpanel" aria-labelledby="canvas-tab-4"
                                tabindex="0">

                                <div class="row col-mb-30">
                                    <div class="col-md-7">
                                        <div class="row col-mb-30">
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Headquarters:</strong><br>
                                                    Jalan Abadi Komplek Abadi Palace<br>
                                                    Tanjung Rejo, Medan Sunggal
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (62) 812
                                                6030 120<br>
                                                <abbr title="Email Address"><strong>Email:</strong></abbr>
                                                ptmalammasintipusat@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0612271261384!2d98.62851017624882!3d3.573394496400777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fcb44c2f58b%3A0x5259529b65da1dee!2sAbadi%20Palace!5e0!3m2!1sen!2sid!4v1692514584054!5m2!1sen!2sid"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="widget quick-contact-widget form-widget">
                            <h4>Quick Quotation Form</h4>
                            <div class="form-result"></div>
                            <form id="quick-contact-form" name="quick-contact-form" action="include/form.php"
                                method="post" class="quick-contact-form mb-0">
                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>
                                <input type="text" class="required form-control mb-2" id="quick-contact-form-name"
                                    name="quick-contact-form-name" value="" placeholder="Full Name">
                                <input type="text" class="required form-control email mb-2"
                                    id="quick-contact-form-email" name="quick-contact-form-email" value=""
                                    placeholder="Email Address">
                                <textarea class="required form-control mb-2 short-textarea" id="quick-contact-form-message"
                                    name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                                <input type="text" class="d-none" id="quick-contact-form-botcheck"
                                    name="quick-contact-form-botcheck" value="">
                                <input type="hidden" name="prefix" value="quick-contact-form-">
                                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit"
                                    class="button button-small button-3d m-0" value="submit">Send Email</button>
                            </form>

                        </div>

                    </div>
                </div>

                <div class="line"></div>

                <div class="row col-mb-50">
                    <div class="col-md-5">
                        <h4>Clients Overview</h4>

                        <p>We prize our Clients more than everything else. We strive to provide Quality Services to
                            all our Clients on a Priority Basis. You are invited to join our Clients List and enjoy
                            our Services. <a href="#">See more...</a></p>

                        <ul class="clients-grid row row-cols-2 row-cols-sm-3 mb-0">
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                        src="{!! asset('webpage/images/clients/1.png') !!}" alt="Malam Mas Inti -Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                        src="{!! asset('webpage/images/clients/2.png') !!}" alt="Malam Mas Inti -Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                        src="{!! asset('webpage/images/clients/3.png') !!}" alt="Malam Mas Inti -Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                        src="{!! asset('webpage/images/clients/4.png') !!}" alt="Malam Mas Inti -Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                        src="{!! asset('webpage/images/clients/5.png') !!}" alt="Malam Mas Inti -Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                        src="{!! asset('webpage/images/clients/6.png') !!}" alt="Malam Mas Inti -Clients"></a></li>
                        </ul>
                    </div>

                    <div class="col-md-7">
                        <h4>Recent News</h4>

                        <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-margin="20"
                            data-nav="true" data-pagi="true" data-items-xs="1" data-items-xl="2">

                            <div class="oc-item">
                                <div class="entry">
                                    <div class="entry-image">
                                        <a href="{!! asset('webpage/ptmmi/projects/miniple-mmi-2.png') !!}" data-lightbox="image"><img
                                                src="{!! asset('webpage/ptmmi/projects/miniple-mmi-2.png') !!}"
                                                alt="Malam Mas Inti -Standard Post with Image"></a>
                                    </div>
                                    <div class="entry-title title-sm text-transform-none">
                                        <h3><a href="#">Pemancangan Miniple</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>20 Sep 2023</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Pemasangan tiang pancang yang berukuran kecil, biasanya memiliki diameter 20-30
                                            cm dan panjang 3-12 meter.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="entry">
                                    <div class="entry-image">
                                        <a href="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-1.png') !!}" data-lightbox="image"><img
                                                src="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-1.png') !!}"
                                                alt="Malam Mas Inti -Standard Post with Image"></a>
                                    </div>
                                    <div class="entry-title title-sm text-transform-none">
                                        <h3><a href="#">Pembangunan Gardu/JPL Perlintasan Kereta Api</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>21 Sep 2023</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Pembangunan struktur dan fasilitas yang diperlukan untuk mengamankan perlintasan
                                            kereta api sebidang</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- #content end -->
@endsection
