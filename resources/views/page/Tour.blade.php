@extends('layouts.app')
@section('content')
    <header class="header-background"
        style="background-image: url('{{ asset('assets/images/background/background-tour.png') }}'); ">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <div class="col-md-6">
                        <h1 class="fw-48 fw-bold text-uppercase text-white">e-bike tour :
                            ride through Bali's natural beauty in a new way</h1>
                        <div>
                            <a href="" class="btn b-green text-white px-4 rounded-0 mx-1 fw-bold">BOOK NOW</a>
                            <a href="" class="btn btn-light px-4 rounded-0 mx-1 fw-bold">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="col-md-10 mx-auto p-y-150 p-md-y-50">
                <div class="row row-cols-md-2 row-cols-1 align-items-center">
                    <div class="col">
                        <h2 class="h4 fw-bold">CHOOSE YOUR PREFERRED </br> PACKAGES & ADD-ONs</h2>
                    </div>
                    <div class="col">
                        <p class="mb-0">We offer various plans to cater to your adventure needs. Whether you want to
                            explore
                            Bali's cultural
                            sites or take in the stunning scenery, we have a plan that's perfect for you.</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col">
                        <img src="{{ asset('assets/images/list-tour/list-tour-1.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/list-tour/list-tour-2.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/list-tour/list-tour-3.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/list-tour/list-tour-4.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/list-tour/list-tour-5.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/list-tour/list-tour-6.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/list-tour/list-tour-7.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/list-tour/list-tour-8.png') }}" alt="" class="w-100 py-3">
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/images/list-tour/list-tour-9.png') }}" alt="" class="w-100 py-3">
                    </div>
                </div>
                <div class="row row-cols-md-2 row-cols-1">
                    <div class="col">
                        <h3 class="h4 fw-bold">YOU CAN CHOOSE THE</br>AREA AND DESIRED TIME</br>AND SCOPE WITH US</h3>
                    </div>
                    <div class="col">
                        <p>UNIKAT knows the best routes, but also stands for unique, which is why we give you the
                            opportunity to
                            take your wishes into account on all tours, including adapting the length of the tour to your
                            pace
                            so that you can finish your tour safely and without stress and the entire group stays together.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="b-white">
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="fw-bold text-uppercase">WHy tour with </br> unikat</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-program">
                            <li>
                                <b>flexible program</b>
                                <p>Choose your destinations, activities, hours and pick-up point, it's up to you.</p>
                            </li>
                            <li>
                                <b>personalized tour with add-ons</b>
                                <p>We offer a range of add-ons to make your e-bike tour in Bali suitable for your needs.</p>
                            </li>
                            <li>
                                <b>safety as a priority</b>
                                <p>Our e-bikes are maintained and our road captains are trained to ensure a safe ride.</p>
                            </li>
                            <li>
                                <b>fun and new experience</b>
                                <p>Our tour will take you off-the-beaten-path to discover Bali's authentic beauty.</p>
                            </li>
                            <li>
                                <b>Easy to Get</b>
                                <p>You can choose to pick up the bikes from our hotel partners or have them delivered.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto p-t-150 p-md-t-50">
                <h2 class="fw-bold text-uppercase h4 text-center pb-4">unikat e-bike tour price list</h2>
                <div class="owl-carousel owl-theme slider-default no-nav">
                    <div class="item slide-items">
                        <div class="slide text-white b-main-color">
                            <div class="p-4 mb-auto">
                                <h3 class="fw-bold text-uppercase">Short e-bike Tour</h3>
                                <ul>
                                    <li>2.5-hours of Bali e-bike tour include 2-hours ride, break time, and activities.</li>
                                    <li>Only 1 destination area in Bali.</li>
                                    <li>With professional road captain.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase b-soft-black p-3 mb-0">49 USD or IDR 700K/Person</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide text-white b-main-color">
                            <div class="p-4 mb-auto">
                                <h3 class="fw-bold text-uppercase">Short e-bike Tour</h3>
                                <ul>
                                    <li>6-hours of Bali e-bike tour include 4-hours ride, break time, and activities.</li>
                                    <li>3 destinations in 1 area in Bali.</li>
                                    <li>With professional road captain.</li>
                                    <li>Curated restaurant visit.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase b-soft-black p-3 mb-0">49 USD or IDR 700K/Person</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide text-white b-main-color">
                            <div class="p-4 mb-auto">
                                <h3 class="fw-bold text-uppercase">Short e-bike Tour</h3>
                                <ul>
                                    <li>10-hours of Bali e-bike tour include 5-hours ride, break time, and activities.</li>
                                    <li>Up to 3 destinations area in Bali.</li>
                                    <li>With professional road captain.</li>
                                    <li>Curated restaurant visit.</li>
                                    <li>Travel in style and comfort with VW Combi 1981.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-bold text-uppercase b-soft-black p-3 mb-0">49 USD or IDR 700K/Person</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <div class="text-center col-md-5 mx-auto">
                    <h2 class="text-uppercase f-24 fw-bold pb-2">Tour upgrades </br> and Add-ons</h2>
                </div>
                <div class="owl-carousel owl-theme slider-default">
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/slider-one/slider-one-1.png') }}" alt="">
                            <div class="py-3 px-4 text-center h-100">
                                <h3 class="h5 fw-bold text-capitalize">road captain upgrade</h3>
                                <p class="mb-0">Start from 60 USD/900K IDR </p>
                                <p>Professional road captain for extra long e-bike tours.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/slider-one/slider-one-1.png') }}" alt="">
                            <div class="py-3 px-4 text-center h-100">
                                <h3 class="h5 fw-bold text-capitalize">road captain upgrade</h3>
                                <p class="mb-0">Start from 60 USD/900K IDR </p>
                                <p>Professional road captain for extra long e-bike tours.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/slider-one/slider-one-1.png') }}" alt="">
                            <div class="py-3 px-4 text-center h-100">
                                <h3 class="h5 fw-bold text-capitalize">road captain upgrade</h3>
                                <p class="mb-0">Start from 60 USD/900K IDR </p>
                                <p>Professional road captain for extra long e-bike tours.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-4">
                    <a href="" class="btn b-green text-white px-4 rounded-0 mx-1 fw-bold">BOOK NOW</a>
                    <a href="" class="btn btn-light px-4 rounded-0 mx-1 fw-bold border">MORE INFO</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="col-md-10 mx-auto">
                <div class="col-md-4">
                    <h2 class="text-uppercase f-24 fw-bold pb-2">The Sample of Uluwatu 4 Hours E-Bike Tour</h2>
                    <p>Our 4 hour tour is not just about cycling, even if it is in the foreground.</p>
                </div>

                <div class="owl-carousel owl-theme slider-tour">
                    <div class="item">
                        <div class="border">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-1.png') }}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4">
                                        <p>Discover the fascinating landscape on 2 wheels and see the world-famous places as
                                            well as
                                            the most beautiful white sand and surfing beaches in Bali, combine exciting
                                            temple
                                            secrets and sustainability workshops if you want, jump into the sea in a new
                                            place
                                            and
                                            learn something about culture and the Bali community with us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-1.png') }}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4">
                                        <p>Discover the fascinating landscape on 2 wheels and see the world-famous places as
                                            well as
                                            the most beautiful white sand and surfing beaches in Bali, combine exciting
                                            temple
                                            secrets and sustainability workshops if you want, jump into the sea in a new
                                            place
                                            and
                                            learn something about culture and the Bali community with us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-1.png') }}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4">
                                        <p>Discover the fascinating landscape on 2 wheels and see the world-famous places as
                                            well as
                                            the most beautiful white sand and surfing beaches in Bali, combine exciting
                                            temple
                                            secrets and sustainability workshops if you want, jump into the sea in a new
                                            place
                                            and
                                            learn something about culture and the Bali community with us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/images/slider-two/slider-two-1.png') }}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4">
                                        <p>Discover the fascinating landscape on 2 wheels and see the world-famous places as
                                            well as
                                            the most beautiful white sand and surfing beaches in Bali, combine exciting
                                            temple
                                            secrets and sustainability workshops if you want, jump into the sea in a new
                                            place
                                            and
                                            learn something about culture and the Bali community with us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="col-md-10 mx-auto p-4 border" style="background:#f5f5f5">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercase f-24 fw-bold pb-2">unikat e-bike tour </br>Terms & Conditions</h2>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>
                            <ol>
                                <li>The e-bike tour requires a minimum of 2 people to book and can accommodate up to a
                                    maximum
                                    of 30 people.</li>
                                <li>The tour booking must be made at least one day in advance.</li>
                                <li>The start time of the tour is flexible and can vary based on the location and type of
                                    tour.
                                </li>
                                <li>Transport fee up to 20 KM bike delivery and pickup for individual tour startpoints will
                                    be
                                    charged IDR. 200.000/bike</li>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
