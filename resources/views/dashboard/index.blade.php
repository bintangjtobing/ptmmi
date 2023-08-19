@extends('dashboard.template')
@section('title', 'Home')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Hello
                                    {{ Auth::user()->name }} 🎉</h5>
                                <p class="mb-4">
                                    Apa kabarmu hari ini? Apa yang ingin kamu lakukan disini?
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('dashboard/assets/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png')}}"
                                    data-app-light-img="illustrations/man-with-laptop-light.png')}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rekapan order T-Shirt</h5>
                        <p class="card-text">
                            Rekapan order T-Shirt adalah form yang akan menampilkan rekapan yang
                            menampilkan data yang memesan T-Shirt di URL <abbr
                                title="20tahun.nanyang.sch.id">20tahun.nanyang.sch.id</abbr> dan
                            <abbr title="undangan.nanyang.sch.id.">undangan.nanyang.sch.id</abbr>.
                        </p>
                        <a href="/app/dashboard/order" class="btn btn-primary">Klik disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
