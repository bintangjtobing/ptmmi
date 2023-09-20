@extends('welcome')
@section('title', 'Contact')
@section('content')
    <!-- Page Title
                                                                                                                                                                                      ============================================= -->
    <section class="page-title page-title-center bg-transparent">
        <div class="container">
            <div class="page-title-row">

                <div class="page-title-content">
                    <h1>Contact Us</h1>
                    <span>Don't hesitate to contact us</span>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>

            </div>
        </div>
    </section><!-- .page-title end -->
    <section id="content">
        <div class="content-wrap">
            <div class="container">

                <div class="row gx-5 col-mb-80 justify-content-md-center">
                    <!-- Postcontent
                                                                                        ============================================= -->
                    {{-- <main class="postcontent col-lg-9">

                        <h3>Send us an Email</h3>

                        <div class="form-widget">

                            <div class="form-result"></div>

                            <form class="mb-0" id="template-contactform" name="template-contactform"
                                action="include/form.php" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-name">Name <small>*</small></label>
                                        <input type="text" id="template-contactform-name"
                                            name="template-contactform-name" value="" class="form-control required">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-email">Email <small>*</small></label>
                                        <input type="email" id="template-contactform-email"
                                            name="template-contactform-email" value=""
                                            class="required email form-control">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-phone">Phone</label>
                                        <input type="text" id="template-contactform-phone"
                                            name="template-contactform-phone" value="" class="form-control">
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-8 form-group">
                                        <label for="template-contactform-subject">Subject <small>*</small></label>
                                        <input type="text" id="template-contactform-subject" name="subject"
                                            value="" class="required form-control">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-service">Services</label>
                                        <select id="template-contactform-service" name="template-contactform-service"
                                            class="form-select">
                                            <option value="">-- Select One --</option>
                                            <option value="Wordpress">Wordpress</option>
                                            <option value="PHP / MySQL">PHP / MySQL</option>
                                            <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                            <option value="Graphic Design">Graphic Design</option>
                                        </select>
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-message">Message <small>*</small></label>
                                        <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message"
                                            rows="6" cols="30"></textarea>
                                    </div>

                                    <div class="col-12 form-group d-none">
                                        <input type="text" id="template-contactform-botcheck"
                                            name="template-contactform-botcheck" value="" class="form-control">
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="button button-3d m-0" type="submit" id="template-contactform-submit"
                                            name="template-contactform-submit" value="submit">Send Message</button>
                                    </div>
                                </div>

                                <input type="hidden" name="prefix" value="template-contactform-">

                            </form>
                        </div>

                    </main><!-- .postcontent end --> --}}

                    <!-- Sidebar
                                                                                        ============================================= -->
                    <aside class="col-lg-6 text-center">

                        <div class="widget">

                            <h3 class="mb-0 text-uppercase">Medan</h3><br>

                            <address>
                                <strong>Headquarters:</strong><br>
                                Jalan Abadi Komplek Abadi Palace<br>
                                Tanjung Rejo, Medan Sunggal
                            </address>
                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (62) 812
                            6030 120<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr>
                            ptmalammasintipusat@gmail.com

                        </div>

                    </aside><!-- .sidebar end -->
                </div>

            </div>

        </div>
    </section>
@endsection
