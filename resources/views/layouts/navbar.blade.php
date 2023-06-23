<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src={{ asset('assets/images/logo.png') }} style="width:150px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-md-0 mt-3  mb-2 mb-lg-0 align-items-center">
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="{{ route('tour.index') }}">E-BIKE TOUR</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="{{ route('rental.index') }}">E-BIKE RENTAL</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="{{ route('partner.index') }}">PARTNERSHIP</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="{{ route('about.index') }}">ABOUT UNIKAT</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="">BOOK NOW</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white btn btn-success rounded-pill px-4 py-0" href="">SIGN IN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
