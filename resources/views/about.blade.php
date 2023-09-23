@extends('welcome')
@section('title', 'Tentang Kami')
@section('content')
    <section class="page-title page-title-center bg-transparent">
        <div class="container">
            <div class="page-title-row">

                <div class="page-title-content">
                    <h1>Tentang Kami</h1>
                    <span>Profil Perusahaan</span>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>
    <section id="content">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading-block border-bottom-0 mb-4">
                            <h3>Sejarah Singkat</h3>
                            <span>PT Malam Mas Inti didirikan pada tahun 2021 oleh Ibu Ruth Anggraini Simanjuntak, seorang
                                pengusaha muda yang
                                berpengalaman di bidang konstruksi bangunan. Perusahaan ini didirikan dengan tujuan untuk
                                menyediakan jasa konstruksi bangunan yang berkualitas dan terjangkau.

                                Pada awal berdirinya, PT Malam Mas Inti hanya mengerjakan proyek-proyek kecil, seperti
                                pembangunan rumah tinggal dan ruko. Namun, seiring dengan perkembangan perusahaan, PT Malam
                                Mas Inti mulai mengerjakan proyek-proyek yang lebih besar, seperti pembangunan gedung
                                perkantoran, hotel, dan pusat perbelanjaan.

                                PT Malam Mas Inti telah mengerjakan berbagai proyek konstruksi bangunan di seluruh
                                Indonesia. Perusahaan ini telah mendapatkan kepercayaan dari berbagai pihak, baik dari
                                pemerintah maupun swasta.</span>
                            <br>
                            <a href="/sc/business/profile/2023" target="_blank"><i class="uil uil-document-info"></i>
                                Company
                                profile PT. Malam Mas Inti</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-block border-bottom-0 mb-4">
                            <h3>Visi</h3>
                            <span>
                                Menjadi perusahaan jasa konstruksi bangunan yang terdepan di Indonesia.
                            </span>
                            <br>
                            <h3>Misi</h3>
                            <span>
                                <ul>
                                    <li>Menyediakan jasa konstruksi bangunan yang berkualitas dan terjangkau.</li>
                                    <li>Membangun hubungan kerja yang baik dengan pelanggan dan mitra kerja.</li>
                                    <li>Meningkatkan kualitas sumber daya manusia.</li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <hr>
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading-block border-bottom-0 mb-4">
                            <h3>Apa yang kami lakukan?</h3>
                            <span>Menyediakan daftar lengkap layanan untuk memenuhi kebutuhan konstruksi Anda. Kami
                                berspesialisasi dalam proyek komersial, industri, dan sipil/nirlaba. Tim kami yang
                                berpengalaman dapat memberikan berbagai macam perdagangan untuk memenuhi kebutuhan bisnis
                                Anda.</span>
                        </div>
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
                                        <h3>Pengalaman dan keahlian</h3>
                                        <p>Dengan sejarah panjang proyek konstruksi yang sukses akan memiliki pengalaman dan
                                            keahlian untuk menyelesaikan pekerjaan dengan benar. Mereka juga akan memiliki
                                            jaringan pemasok dan subkontraktor yang dapat membantu mereka menyelesaikan
                                            proyek tepat waktu dan sesuai anggaran.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/bank.png') !!}" alt="Finance Assistance"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Kualitas pekerjaan</h3>
                                        <p>Memberikan pekerjaan berkualitas tinggi secara konsisten akan membangun reputasi
                                            keunggulan. Hal ini akan membuat mereka lebih menarik bagi calon klien dan
                                            membantu mereka memenangkan proyek baru.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/traffic-cone.png') !!}" alt="Smart Builders"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Pengiriman tepat waktu</h3>
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
                                        <h3>Fleksibilitas</h3>
                                        <p>Fleksibel dan mudah beradaptasi akan mampu menangani perubahan ruang lingkup atau
                                            jadwal proyek. Hal ini penting dalam industri konstruksi, dimana tantangan tak
                                            terduga sering terjadi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img src="{!! asset('webpage/demos/construction/images/icons/traffic-cone.png') !!}"
                                                alt="Interiorly Designed"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Komunikasi yang baik dan terarah</h3>
                                        <p>Berkomunikasi secara efektif dengan klien dan tim proyek akan lebih mungkin
                                            menghindari masalah dan penundaan. Mereka juga akan mampu membangun kepercayaan
                                            dan hubungan baik dengan klien mereka, yang penting untuk kesuksesan jangka
                                            panjang.</p>
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
                                        <h3>Keamanan yang terjaga</h3>
                                        <p>Mengutamakan keselamatan akan menciptakan lingkungan kerja yang positif bagi
                                            karyawannya dan mengurangi risiko kecelakaan. Hal ini penting dalam industri
                                            konstruksi, dimana kecelakaan dapat menimbulkan kerugian dan bahkan fatal.</p>
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
                        <h4>Tim kami</h4>

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
