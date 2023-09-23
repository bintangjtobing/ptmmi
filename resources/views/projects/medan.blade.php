@extends('welcome')
@section('title', 'Projects in Medan')
@section('content')
    <!-- Page Title
                                                                                                                                                                                  ============================================= -->
    <section class="page-title page-title-center bg-transparent">
        <div class="container">
            <div class="page-title-row">

                <div class="page-title-content">
                    <h1>Projects in Medan</h1>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects / Medan</li>
                    </ol>
                </nav>

            </div>
        </div>
    </section>
    <section id="content">
        <div class="content-wrap">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="masonry-thumbs grid-container row row-cols-4" data-big="4" data-lightbox="gallery">
                            <a class="grid-item" href="{!! asset('webpage/ptmmi/projects/miniple-mmi-1.png') !!}" data-lightbox="gallery-item"><img
                                    src="{!! asset('webpage/ptmmi/projects/miniple-mmi-1.png') !!}" alt="Projects in Medan | PT Malam Mas Inti"></a>
                            <a class="grid-item" href="{!! asset('webpage/ptmmi/projects/miniple-mmi-2.png') !!}" data-lightbox="gallery-item"><img
                                    src="{!! asset('webpage/ptmmi/projects/miniple-mmi-2.png') !!}" alt="Projects in Medan | PT Malam Mas Inti"></a>
                            <a class="grid-item" href="{!! asset('webpage/ptmmi/projects/miniple-mmi-3.png') !!}" data-lightbox="gallery-item"><img
                                    src="{!! asset('webpage/ptmmi/projects/miniple-mmi-3.png') !!}" alt="Projects in Medan | PT Malam Mas Inti"></a>
                            <a class="grid-item" href="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-1.png') !!}" data-lightbox="gallery-item"><img
                                    src="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-1.png') !!}" alt="Projects in Medan | PT Malam Mas Inti"></a>
                            <a class="grid-item" href="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-2.png') !!}" data-lightbox="gallery-item"><img
                                    src="{!! asset('webpage/ptmmi/projects/gardu-jpl-pka-2.png') !!}" alt="Projects in Medan | PT Malam Mas Inti"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
