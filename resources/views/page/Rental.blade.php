@extends('layouts.app')
@section('content')
    <header
        style="background-image: url('{{ asset('assets/images/background/background-rental.png') }}'); height: 80vh;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <div class="col-md-6">
                        <h1 class="fw-48 fw-bold text-uppercase text-white">e-bike rental: Explore Bali sustainably at your
                            own pace</h1>
                        <div>
                            <a href="" class="btn btn-success px-4 rounded-0 mx-1 fw-bold">BOOK NOW</a>
                            <a href="" class="btn btn-light px-4 rounded-0 mx-1 fw-bold">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="b-white">
        <div class="container">
            <div class="col-md-10 mx-auto py-5 p-b-125">
                <div class="text-center col-md-5 mx-auto">
                    <h2 class="text-uppercase f-24 fw-bold pb-4">e-bike rental : </br>
                        Explore Bali at your own pace in</br> a sustainable way</h2>
                </div>
                <div class="owl-carousel owl-theme slider-default">
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/list-rental/rental-1.png') }}" alt="">
                            <div class="py-3 px-4 text-center h-100">
                                <h3 class="h5 fw-bold text-capitalize">choose your plan for unikat e-bike rental</h3>
                                <p class="mb-0">At UNIKAT, renting an e-bike for your Bali adventure is easy and hassle-free.
                                    Select your rental period and the pick-up/drop-off location that's most convenient for you.
                                    Contact us to make your booking. Our team is always ready to assist you with any questions
                                    you may have.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/list-rental/rental-2.png') }}" alt="">
                            <div class="py-3 px-4 text-center h-100">
                                <h3 class="h5 fw-bold text-capitalize">your e-bike is ready for you to ride</h3>
                                <p class="mb-0">On the rental day, come to our store or request a delivery service to your
                                    location. Our staff will provide you with a brief tutorial on how to operate the e-bike
                                    safely. We will also provide you with a map and suggested routes to help you make the most
                                    of your adventure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide border">
                            <img src="{{ asset('assets/images/list-rental/rental-3.png') }}" alt="">
                            <div class="py-3 px-4 text-center h-100">
                                <h3 class="h5 fw-bold text-capitalize">enjoy exploring Bali with freedom and eco-friendly</h3>
                                <p class="mb-0">With your e-bike, you have the freedom and flexibility to explore Bali at your
                                    own pace and eco-friendly. Our e-bikes are equipped with powerful motors and long-lasting
                                    batteries, allowing you to ride smoothly and effortlessly through Bali's scenic routes and
                                    hidden gems.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-10 mx-auto p-y-150 p-md-y-50">
                <div class="row align-items-center pb-4">
                    <div class="col-md-6">
                        <h2 class="text-uppercase f-24 fw-bold pb-2">choose the right plan for </br> your e-bike rental</h2>
                    </div>
                    <div class="col-md-6">
                        <p>From short-term rentals for a quick ride around town to long-term rentals for a more extended
                            adventure, we have the right plan for you. Our selection of high-quality e-bikes and flexible
                            rental
                            options will make your ride in Bali a breeze.</p>
                    </div>
                </div>
                <div class="owl-carousel owl-theme slider-default">
                    <div class="item slide-items">
                        <div class="slide w-100">
                            <img src="{{ asset('assets/images/bike/bike-1.png') }}" alt="" class="w-100 py-3">
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide w-100">
                            <img src="{{ asset('assets/images/bike/bike-2.png') }}" alt="" class="w-100 py-3">
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide w-100">
                            <img src="{{ asset('assets/images/bike/bike-3.png') }}" alt="" class="w-100 py-3">
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide w-100">
                            <img src="{{ asset('assets/images/bike/bike-1.png') }}" alt="" class="w-100 py-3">
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide w-100">
                            <img src="{{ asset('assets/images/bike/bike-2.png') }}" alt="" class="w-100 py-3">
                        </div>
                    </div>
                    <div class="item slide-items">
                        <div class="slide w-100">
                            <img src="{{ asset('assets/images/bike/bike-3.png') }}" alt="" class="w-100 py-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="b-white">
        <div class="container">
            <div class="col-md-10 mx-auto py-5">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="fw-bold text-uppercase">why rent with </br> unikat</h2>
                    </div>
                    <div class="col-md-7">
                        <ul class="list-program">
                            <li>
                                <b>Zero Emissions and eco-friendly</b>
                                <p>Using an e-bike reduces your carbon footprint and positively impacts the environment.</p>
                            </li>
                            <li>
                                <b>Customer service</b>
                                <p>We always available to assist you with any services, maintenances or emergencies.</p>
                            </li>
                            <li>
                                <b>rental made easy</b>
                                <p>Select your plan and get your e-bike delivered to your location, so easy!</p>
                            </li>
                            <li>
                                <b>convenient ride</b>
                                <p>e-bike rental includes a helmet, lamp, road apps, route map, and lock. It's convenient!</p>
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
            <div class="col-md-10 mx-auto p-t-150 p-md-t-50 pb-5">
                <h2 class="fw-bold text-uppercase h4 text-center pb-4">unikat e-bike RENTAL price list</h2>
                <div class="row row-cols-md-4 row-cols-2">
                    <div class="col">
                        <div class="b-main-color text-white text-center">
                            <div class="text-uppercase fw-bold py-4 px-2 h4">Daily</br>Plan</div>
                            <p class="b-soft-black py-2 fw-bold">28 USD or IDR 400K</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="b-main-color text-white text-center">
                            <div class="text-uppercase fw-bold py-4 px-2 h4">Weekly</br>Plan</div>
                            <p class="b-soft-black py-2 fw-bold">28 USD or IDR 400K</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="b-main-color text-white text-center">
                            <div class="text-uppercase fw-bold py-4 px-2 h4">Monthly</br>Plan</div>
                            <p class="b-soft-black py-2 fw-bold">28 USD or IDR 400K</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="b-main-color text-white text-center">
                            <div class="text-uppercase fw-bold py-4 px-2 h4">SUBSCRIPTION</br>Plan</div>
                            <p class="b-soft-black py-2 fw-bold">28 USD or IDR 400K</p>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-4">
                    <a href="" class="btn btn-success px-4 rounded-0 mx-1 fw-bold">BOOK NOW</a>
                    <a href="" class="btn btn-light px-4 rounded-0 mx-1 fw-bold border">MORE INFO</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="p-b-150 p-md-b-50">
                <div class="col-md-10 mx-auto p-4 border b-white">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-uppercase f-24 fw-bold pb-2">UNikat e-bike rental </br> Terms & Conditions</h2>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <p>
                                <ol>
                                    <li>High-quality e-bike with complete equipment; helmet, lamp, road apps, route map, and
                                        lock.</li>
                                    <li>Full support for e-bike maintenance and safety emergencies.</li>
                                    <li>Net price; service and tax included.</li>
                                    <li>Transport fee up to 20 KM delivery and pickup for rentals will be charged IDR. 200.000 /
                                        bike</li>
                                </ol>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
