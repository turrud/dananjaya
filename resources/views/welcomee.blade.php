<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="images/logo50.ico" type="image/x-icon">
    <title>Dananjaya Design | Welcome</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">
</head>
<body>

    <main>

        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to Virtual Exhibition 2023</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <div class="rd-navbar-brand"><a class="brand" href="/"><img src="images/logo5.png" alt="" width="100" height="100"/></a>
                    </div>
                </a>

                @if (Route::has('login'))

                    @auth
                        <a class="btn custom-btn d-lg-none ms-auto me-4" href="{{ url('/home') }}">Back to Home</a>
                    @else
                    <a href="{{ route('login') }}" class="btn custom-btn d-lg-none ms-auto me-4"><i class="bi bi-box-arrow-in-right"></i> Log in</a>

                    @endauth
                @endif




                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                    </ul>

                    @if (Route::has('login'))

                    @auth
                        <a class="btn custom-btn d-lg-block d-none" href="{{ url('/home') }}">Hi {{ Auth::user()->name }}, Back to Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn custom-btn d-lg-block d-none"><i class="bi bi-box-arrow-in-right"></i> Log in</a>

                    @endauth
                @endif
                </div>
            </div>
        </nav>


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5  text-center">
                        <small>Live Presents</small>

                        <h1 class="text-white mb-5">Virtual Exhibition 2023</h1>

                        <a class="btn custom-btn smoothscroll" href="/home">Let's begin</a>
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                        <div class="date-wrap">
                            <h5 class="text-white">
                                <i class="custom-icon bi-clock me-2"></i>
                                8 - 15<sup>th</sup>, March 2023
                            </h5>
                        </div>

                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                Bandung, Indonesia
                            </h5>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Share:</span>

                                <li class="social-icon-item">
                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=6289523941316&text&type=phone_number&app_absent=0" class="social-icon-link">
                                        <span class="bi-whatsapp"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a target="_blank" href="https://www.youtube.com/@omahin" class="social-icon-link">
                                        <span class="bi-youtube"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a target="_blank" href="https://www.instagram.com/dananjayadesign" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="/video/iklan.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>
    </main>



    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
