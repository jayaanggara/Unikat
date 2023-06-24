@extends('layouts.app')
@section('content')
    <header
        style="background-image: url('{{ asset('assets/images/background/background-partner.png') }}'); height: 80vh;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <div class="col-md-6">
                        <h1 class="fw-48 fw-bold text-uppercase text-white">partnership with unikat for a sustainable and
                            better Bali</h1>
                        <div>
                            <a href="" class="btn btn-success px-4 rounded-0 mx-1 fw-bold">BOOK NOW</a>
                            <a href="" class="btn btn-light px-4 rounded-0 mx-1 fw-bold">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="container">
            <div class="col-md-10 mx-auto pt-5 p-b-150 p-md-b-50">
                <div class="row align-items-center pb-4">
                    <div class="col-md-6">
                        <h2 class="text-uppercase f-24 fw-bold pb-2">Your partner for a </br> healthy, sustainable,</br> and
                            better
                            Bali </h2>
                    </div>
                    <div class="col-md-6">
                        <p>Unikat partners that share our eco-friendly vision. Together, we offer unforgettable experiences
                            while preserving the environment.</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-1.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-2.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-3.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-4.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-5.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-6.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-7.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-8.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/partner/partner-9.png') }}" alt="" class="w-100 py-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto pt-5 p-b-150 p-md-b-50">
                <h2 class="fw-bold h4 text-center">why partner with us?</h2>
                <div class="row row-cols-1 row-cols-md-3 py-4">
                    <div class="col pb-4">
                        <div class="w-100 h-100 border px-4 py-5 text-center">
                            <img src="{{ asset('assets/images/icon/partner-1.png') }}" alt="">
                            <h3 class="h5 fw-bold py-3">Diversity for sustainability</h3>
                            <p>We believe that sustainability is a team effort. That's why we're open to partner with
                                businesses
                                of all types - including hotels, cafes, and more.</p>
                        </div>
                    </div>
                    <div class="col pb-4">
                        <div class="w-100 h-100 border px-4 py-5 text-center">
                            <img src="{{ asset('assets/images/icon/partner-1.png') }}" alt="">
                            <h3 class="h5 fw-bold py-3">Diversity for sustainability</h3>
                            <p>We believe that sustainability is a team effort. That's why we're open to partner with
                                businesses
                                of all types - including hotels, cafes, and more.</p>
                        </div>
                    </div>
                    <div class="col pb-4">
                        <div class="w-100 h-100 border px-4 py-5 text-center">
                            <img src="{{ asset('assets/images/icon/partner-1.png') }}" alt="">
                            <h3 class="h5 fw-bold py-3">Diversity for sustainability</h3>
                            <p>We believe that sustainability is a team effort. That's why we're open to partner with
                                businesses
                                of all types - including hotels, cafes, and more.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="" class="btn btn-success text-uppercase fw-bold rounded-0 px-4">partnership enquiry</a>
                </div>
            </div>
        </div>
    </section>
@endsection
