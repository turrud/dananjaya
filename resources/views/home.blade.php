<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dananjaya Design </title>
    <link rel="icon" href="images/logo50.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,400i,500,700">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">



    <style>
        .ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
    </style>
</head>
<body class="bokin">
    <div class="pag">
        {{-- header vav --}}
        <header class="section page-header context-dark" id="home">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
              <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                <div class="rd-navbar-main-outer">
                  <div class="rd-navbar-main">
                    <div class="rd-navbar-nav-wrap">
                      <!-- RD Navbar Nav-->
                      <ul class="rd-navbar-nav">
                        <li class="rd-nav-item active"><a class="rd-nav-link" style="text-decoration:none; ; color:#FFFFFF" href="#home">Home</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" style="text-decoration:none; ; color:#FFFFFF" href="#event">Event</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" style="text-decoration:none; ; color:#FFFFFF" href="#price-list">Price List</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" style="text-decoration:none; ; color:#FFFFFF" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" style="text-decoration:none; ; color:#FFFFFF" href="#about">About</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" style="text-decoration:none; ; color:#FFFFFF" href="#contacts">Contacts</a>
                        </li>
                      </ul>
                    </div>
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                      <!-- RD Navbar Toggle-->
                      <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                      <!-- RD Navbar Brand-->
                      <div class="rd-navbar-brand"><a class="brand" href="/"><img src="images/logo5.png" alt="" width="60" height="20"/></a>
                      </div>
                    </div>
                    <div class="rd-navbar-collapse">
                        <div class="dropdown">
                            <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                              <li>
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
                                    Log out
                                </a>
                                </form>
                                </li>
                            </ul>
                          </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
        </header>

        {{-- GAMBAR SIDE LAND --}}
        <section class="section bg-gray-900 box-custom-1">
            <div class="box-custom-1-aside">
              <ul class="box-custom-1-list">
                <li class="wow fadeInLeft" data-wow-delay=".5s"><a class="link link-social" target="_blank" href="https://api.whatsapp.com/send/?phone=6289523941316&text&type=phone_number&app_absent=0">
                    <div class="icon novi-icon fa-whatsapp"></div></a></li>
                <li class="wow fadeInLeft" data-wow-delay=".6s"><a class="link link-social" target="_blank" href="https://www.youtube.com/@omahin">
                    <div class="icon novi-icon fa-youtube-play"></div></a></li>
                <li class="wow fadeInLeft" data-wow-delay=".7s"><a class="link link-social" target="_blank" href="https://www.instagram.com/dananjayadesign">
                    <div class="icon novi-icon fa-instagram"></div></a></li>
              </ul>
            </div>
            <div class="box-custom-1-main" style="background-image: url(/images/h1.jpeg)">
              <div class="block-sm">
                <h1 class="wow fadeInRight bokin" style="color: #CBB682;" data-wow-delay=".5s">Let's Go !!!</h1>
                <h2 class="wow fadeInRight bokin" style="color: #CBB682;" data-wow-delay=".5s">Kita ke Pameran Online</h2>
                <p class="wow fadeInRight bokin" style="color: #CBB682;" data-wow-delay=".6s">"Ini adalah pameran virtual dari Dananjaya Design yang ke-4, yang mana bertemakan <i> <b>INDEPENDENT WOMAN</b></i>  yang berkolaborasi dengan seniman-seniman hebat di Indonesia"</p><a class="button button-red button-round-2 button-shadow wow fadeInRight" data-wow-delay=".7s" target="_blank" href="https://app.lapentor.com/sphere/indepent-woman-exhibition-by-dananjaya-design-feat-omahin" style="text-decoration:none; ; color:#CBB682">Let's begin</a>
              </div>
            </div>
        </section>

        {{-- Event --}}
        <section class="section section-md-2" style="background-color: #9D7A43" id="event" >
            <div class="bg-custom novi-bg novi-bg-img " style="background-color: #C2A26F"></div>
            <div class="container">
                <div class="row row-30">
                <div class="col-xl-6 col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                    <h2>Our Event</h2>
                </div>
                <div class="col-xl-5 col-md-6 wow fadeInRight" data-wow-delay=".5s">
                    <p>"Ini adalah beberapa acara yang sudah kami buat untuk Indonesia, Pantengin terus setiap event yang kami buat."</p>
                </div>
                </div>
            </div>
            <div class="container container-custom-right">
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-carousel-classic" data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-nav="true" data-loop="true" data-margin="30" data-mouse-drag="false" data-center="true" data-autoplay="true">
                <div class="post-classic">
                    <a target="_blank" href="https://app.lapentor.com/sphere/the-first-architectural-exhibition-in-the-city-of-cirebon">
                    <div class="post-classic-figure thumbnail"><img src="https://omahkucuk.000webhostapp.com/images/event1.png" alt="" width="494" height="400"/>
                    </div>
                    </a>
                    <h4 class="post-classic-title"><a target="_blank" href="https://app.lapentor.com/sphere/the-first-architectural-exhibition-in-the-city-of-cirebon" style="text-decoration:none">The First Architectural Exhibition in the city of Cirebon</a></h4>
                    <ul class="post-classic-description">
                    <li>2021</li>
                    <li>Cirebon</li>
                    <li>Indonesia</li>
                    </ul>
                </div>
                <div class="post-classic">
                    <a target="_blank" href="https://app.lapentor.com/sphere/museum-sejarah-studio?scene=6103ec2e1731cf0b15418a69">
                    <div class="post-classic-figure thumbnail"><img src="https://omahkucuk.000webhostapp.com/images/event2.png" alt="" width="494" height="400"/>
                    </div>
                    </a>
                    <h4 class="post-classic-title"><a target="_blank" href="https://app.lapentor.com/sphere/museum-sejarah-studio?scene=6103ec2e1731cf0b15418a69" style="text-decoration:none">Museum Sejarah Studio</a></h4>
                    <ul class="post-classic-description">
                    <li>2020</li>
                    <li>Bandung</li>
                    <li>Indonesia</li>
                    </ul>
                </div>
                <div class="post-classic">
                    <a target="_blank" href="https://app.lapentor.com/sphere/nafira">
                    <div class="post-classic-figure thumbnail"><img src="https://omahkucuk.000webhostapp.com/images/event3.png" alt="" width="494" height="400"/>
                    </div>
                    </a>
                    <h4 class="post-classic-title"><a target="_blank" href="https://app.lapentor.com/sphere/nafira" style="text-decoration:none">Nafira Batik Exhibition</a></h4>
                    <ul class="post-classic-description">
                    <li>2022</li>
                    <li>Sumedang</li>
                    <li>Indonesia</li>
                    </ul>
                </div>

                <div class="post-classic">
                    <a target="_blank" href="https://app.lapentor.com/sphere/sponsor-1645212329"></a>
                    <div class="post-classic-figure thumbnail"><img src="https://omahkucuk.000webhostapp.com/images/event5.png" alt="" width="494" height="400"/>
                    </div>
                    </a>
                    <h4 class="post-classic-title"><a target="_blank" href="https://app.lapentor.com/sphere/sponsor-1645212329" style="text-decoration:none">Bazar Ikatan Wanita Pengusaha Indonesia</a></h4>
                    <ul class="post-classic-description">
                    <li>2022</li>
                    <li>Sumedang</li>
                    <li>Indonesia</li>
                    </ul>
                </div>
                </div>
            </div>
        </section>

        {{-- BUDGET KONSUL --}}
        <section class="section section-sm bg-gray-900 novi-bg novi-bg-img text-center" id="price-list" style="background-image: url(images/bg-price-1920x1128.png)">
            <div class="container">
                <div class="row justify-content-center wow fadeInDown" data-wow-delay=".25s">
                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <h2>Bangun hunian impian ?</h2>
                        <p class="pretitle" style="color: #CBB682">Silahkan pilih</p>
                    </div>
                </div>
                <div class="card bg-transparent rounded-full mt-112 border-0">
                    <div class="row justify-content-center row-37 wow fadeInDown" data-wow-delay=".1s">
                        <div class="col-12">
                        </div>
                        <div class="col-md-4">
                        <div class="thumbnail"><a target="_blank" href="https://app.midtrans.com/payment-links/1678126448104"><img  src="https://omahkucuk.000webhostapp.com/images/bronze.png" alt="" width="370" height="222"/></a></div>
                        </div>
                        <div class="col-xl-8 col-lg-10">
                        <p class="pretitle text-white">Include</p>
                        <ul class="list-decorative">
                            <li>Denah Teknikal</li>
                            <li>Denah Berwarna</li>
                            <li>Layout Furniture</li>
                            <li>Layout Lantai</li>
                            <li>Layout Ceiling</li>
                            <li>Prespektif 4 lembar</li>
                            <li>Video Render 1 menit</li>
                        </ul>
                        </div>
                    </div>
                    <div class="row justify-content-center row-37 wow fadeInDown" data-wow-delay=".3s">
                        <div class="col-12">
                        </div>
                        <div class="col-md-4">
                        <div class="thumbnail"><a target="_blank" href="https://app.midtrans.com/payment-links/1678126837565"><img  src="https://omahkucuk.000webhostapp.com/images/silver.png" alt="" width="370" height="222"/></a></div>
                        </div>
                        <div class="col-xl-8 col-lg-10">
                        <p class="pretitle text-white">Include</p>
                        <ul class="list-decorative">
                            <li>Denah Teknikal</li>
                            <li>Denah Berwarna</li>
                            <li>Layout Furniture</li>
                            <li>Layout Lantai</li>
                            <li>Layout Ceiling</li>
                            <li>Prespektif 10 lembar</li>
                            <li>2 Video Render 1 menit</li>
                            <li>Tampak BW 2 lembar</li>
                            <li>Tampak Berwarna 2 lembar</li>
                            <li>Potongan BW 2 lembar</li>
                        </ul>
                        </div>
                    </div>
                    <div class="row justify-content-center row-37 wow fadeInDown" data-wow-delay=".5s">
                        <div class="col-12">
                        </div>
                        <div class="col-md-4">
                        <div class="thumbnail"><a target="_blank" href="https://app.midtrans.com/payment-links/1678126871773"><img  src="https://omahkucuk.000webhostapp.com/images/gold.png" alt="" width="370" height="222"/></a></div>
                        </div>
                        <div class="col-xl-8 col-lg-10">
                        <p class="pretitle text-white">Include</p>
                        <ul class="list-decorative">
                            <li>Denah Teknikal</li>
                            <li>Denah Berwarna</li>
                            <li>Layout Furniture</li>
                            <li>Layout Lantai</li>
                            <li>Layout Ceiling</li>
                            <li>Layout ME/listrik</li>
                            <li>Layout Plumbing</li>
                            <li>Prespektif 10 lembar</li>
                            <li>2 Video Render 1 menit</li>
                            <li>Tampak BW 2 lembar</li>
                            <li>Tampak Berwarna 2 lembar</li>
                            <li>Potongan BW 2 lembar</li>
                            <li>Virtual Reality</li>
                        </ul>
                        </div>
                    </div>
                    <div class="row justify-content-center row-37 wow fadeInDown" data-wow-delay=".7s">
                        <div class="col-12">
                        </div>
                        <div class="col-md-4">
                        <div class="thumbnail"><a target="_blank" href="https://app.midtrans.com/payment-links/1678126893715"><img  src="https://omahkucuk.000webhostapp.com/images/platinum.png" alt="" width="370" height="222"/></a></div>
                        </div>
                        <div class="col-xl-8 col-lg-10">
                        <p class="pretitle text-white">Include</p>
                        <ul class="list-decorative">
                            <li>Denah Teknikal</li>
                            <li>Denah Berwarna</li>
                            <li>Layout Furniture</li>
                            <li>Layout Lantai</li>
                            <li>Layout Ceiling</li>
                            <li>Layout ME/listrik</li>
                            <li>Layout Plumbing</li>
                            <li>Prespektif 16 lembar</li>
                            <li>2 Video Render 2 menit</li>
                            <li>Tampak BW 4 lembar</li>
                            <li>Tampak Berwarna 4 lembar</li>
                            <li>Potongan BW 4 lembar</li>
                            <li>Virtual Reality</li>
                            <li>RAB</li>
                        </ul>
                        </div>
                    </div>
                    <div class="row justify-content-center row-37 wow fadeInDown" data-wow-delay=".9s">
                        <div class="col-12">
                        </div>
                        <div class="col-md-4">
                        <div class="thumbnail"><a target="_blank" href="https://app.midtrans.com/payment-links/1678126952415"><img  src="https://omahkucuk.000webhostapp.com/images/priority.png" alt="" width="370" height="222"/></a></div>
                        </div>
                        <div class="col-xl-8 col-lg-10">
                        <p class="pretitle text-white">Include</p>
                        <ul class="list-decorative">
                            <li>Denah Teknikal</li>
                            <li>Denah Berwarna</li>
                            <li>Layout Furniture</li>
                            <li>Layout Lantai</li>
                            <li>Layout Ceiling</li>
                            <li>Layout ME/listrik</li>
                            <li>Layout Plumbing</li>
                            <li>Prespektif 16 lembar</li>
                            <li>2 Video Render 2 menit</li>
                            <li>Tampak BW 4 lembar</li>
                            <li>Tampak Berwarna 4 lembar</li>
                            <li>Potongan BW 4 lembar</li>
                            <li>Virtual Reality</li>
                            <li>RAB</li>
                            <li>Tanpa Antri</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- PORTOFOLIO --}}
        <section class="section section-md-2" style="background-color: #785F37" id="portfolio" >
            <div class="bg-custom novi-bg novi-bg-img " style="background-color: #C2A26F"></div>
            <div class="container">
              <div class="row row-30">
                <div class="col-xl-6 col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                  <h2>Our Portfolio</h2>
                </div>
                <div class="col-xl-5 col-md-6 wow fadeInRight" data-wow-delay=".5s">
                  <p>All our projects are unique and designed to last. Take a look at our recent works to find it out for yourself.</p>
                </div>
              </div>
            </div>
            <div class="container container-custom-right">
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-carousel-classic" data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-nav="true" data-loop="true" data-margin="30" data-mouse-drag="false" data-center="true" data-autoplay="true">
                <div class="post-classic">
                  <div class="post-classic-figure"><img src="https://omahkucuk.000webhostapp.com/images/porto1.png" alt="" width="494" height="400"/>
                  </div>
                  <h4 class="post-classic-title"><a style="text-decoration:none" href="#">Modern Loft Room</a></h4>
                  <ul class="post-classic-description">
                    <li>2018</li>
                    <li>Residential</li>
                    <li>New York</li>
                  </ul>
                </div>
                <div class="post-classic">
                  <div class="post-classic-figure"><img src="https://omahkucuk.000webhostapp.com/images/porto2.png" alt="" width="494" height="400"/>
                  </div>
                  <h4 class="post-classic-title"><a style="text-decoration:none" href="#">Sunny Valley Hotel</a></h4>
                  <ul class="post-classic-description">
                    <li>2017</li>
                    <li>Custom Project</li>
                    <li>Los Angeles </li>
                  </ul>
                </div>
                <div class="post-classic">
                  <div class="post-classic-figure"><img src="https://omahkucuk.000webhostapp.com/images/porto2.png" alt="" width="494" height="400"/>
                  </div>
                  <h4 class="post-classic-title"><a style="text-decoration:none" href="#">Swanson Entertainment Center</a></h4>
                  <ul class="post-classic-description">
                    <li>2016</li>
                    <li>Commercial</li>
                    <li>Seattle</li>
                  </ul>
                </div>
                <div class="post-classic">
                  <div class="post-classic-figure"><img src="https://omahkucuk.000webhostapp.com/images/porto2.png" alt="" width="494" height="400"/>
                  </div>
                  <h4 class="post-classic-title"><a style="text-decoration:none" href="#">Jane McMillan’s House</a></h4>
                  <ul class="post-classic-description">
                    <li>2015</li>
                    <li>Residential</li>
                    <li>Atlanta</li>
                  </ul>
                </div>
              </div>
            </div>
        </section>

        {{-- About US --}}
        <section class="section section-md-2" style="background-color: #C2A26F" id="about" >
            <div class="bg-custom novi-bg novi-bg-img " style="background-color: #C2A26F"></div>
            <div class="container">
              <div class="row row-30">
                <div class="col-xl-6 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                  <h2>About US</h2>
                </div>
                <div class="col-xl-5 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                  <p1>Pengembangan</p1>
                </div>
              </div>
            </div>
            <div class=" container-custom-right mt-5">
            <div class="justify-center">
                <div class="card-group ml-4 mr-1 mt-112">
                    <div class="card border-0 wow fadeInDown thumbnail" data-wow-delay=".1s" style="max-width: 300px; background-color: #C2A26F">
                      <img class="wow fadeInDown" src="images/kin.png" class="card-img-top" alt="foto">
                      <div class="card-body">
                        <h5 class="card-title">Ahmad Ghazy Dananjaya</h5>
                        <p class="card-text"><i>"Puncak keindahan adalah kesinambungan antara insan & Tuhan."</i></p>
                        <p class="card-text"><small class="text-muted">CEO & Founder Dananjaya Design</small></p>
                      </div>
                    </div>
                    <div class="card border-0 wow fadeInDown thumbnail" data-wow-delay=".2s" style="max-width: 300px; background-color: #C2A26F">
                      <img class="wow fadeInDown" src="images/hing.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Inggi Lestari</h5>
                        <p class="card-text"><i>"Pendidikan dimulai sejak dalam kandungan sampai liang lahat."</i></p>
                        <p class="card-text"><small class="text-muted">Art Educator</small></p>
                      </div>
                    </div>
                    <div class="card border-0 wow fadeInDown thumbnail" data-wow-delay=".3s" style="max-width: 300px; background-color: #C2A26F">
                      <img class="wow fadeInDown" src="images/co.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Rico Maulana</h5>
                        <p class="card-text"><i>"I believe media is art."</i></p>
                        <p class="card-text"><small class="text-muted">Furniture Designer</small></p>
                      </div>
                    </div>
                    <div class="card border-0 wow fadeInDown thumbnail" data-wow-delay=".4s" style="max-width: 300px; background-color: #C2A26F">
                      <img class="wow fadeInDown" src="images/tur.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Fatur Rahman</h5>
                        <p class="card-text"><i>"(QS. AL-`Alaq[96]:1-5)"</i></p>
                        <p class="card-text"><small class="text-muted">Developer</small></p>
                      </div>
                    </div>
                    <div class="card border-0 wow fadeInDown thumbnail" data-wow-delay=".5s" style="max-width: 300px; background-color: #C2A26F">
                      <img class="wow fadeInDown" src="images/sadida.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Sadida Abdul Ghani</h5>
                        <p class="card-text"><i>"We build your dream with heart"</i></p>
                        <p class="card-text"><small class="text-muted">contractor</small></p>
                      </div>
                    </div>
                    <div class="card border-0 wow fadeInDown thumbnail" data-wow-delay=".6s" style="max-width: 300px; background-color: #C2A26F">
                      <img class="wow fadeInDown" src="images/logo5.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Rangga Firmansyah, S.Sn., M.Sc</h5>
                        <p class="card-text"><i>"Motto Pak rangga" </i></p>
                        <p class="card-text"><small class="text-muted">Design Mentor</small></p>
                      </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


        {{-- BOOK DESAINER --}}
        <section class="section section-sm bg-gray-900 novi-bg novi-bg-img pb-0 text-center" id="contacts" style="background-image: url(images/bg-price-1920x1128.png)">
            <div class="container">
              <div class="row row-fix justify-content-center wow fadeInDown" data-wow-delay=".25s">
                <div class="col-lg-6 col-md-8">
                  <h2>Book a designer consultation</h2>
                  <p class="pretitle text-primary">A great way to your new interior</p>
                </div>
              </div>
              <div class="row row-50 justify-content-center">
                <div class="col-md-4">
                  <div class="box-classic wow fadeInLeft" data-wow-delay=".5s">
                    <div class="box-classic-icon">
                      <div class="icon novi-icon icon-xl linearicons-bubble-text"></div>
                    </div>
                    <div class="box-classic-text">
                      <p class="subtitle">Discuss every aspect of your interior with one of our designers</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-classic wow fadeInDown" data-wow-delay=".5s">
                    <div class="box-classic-icon">
                      <div class="icon novi-icon icon-xl linearicons-calculator"></div>
                    </div>
                    <div class="box-classic-text">
                      <p class="subtitle">Let us plan and calculate every part of your new interior</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-classic wow fadeInRight" data-wow-delay=".5s">
                    <div class="box-classic-icon">
                      <div class="icon novi-icon icon-xl linearicons-star"></div>
                    </div>
                    <div class="box-classic-text">
                      <p class="subtitle">You can also ask questions and suggest any project changes</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-fix align-items-center mt-112">
                <div class="col-12">

                </div>
              </div>
            </div>
        </section>

        {{-- COMMENT CLIENT --}}
        <section class="section section-xs bg-gray-200" style="background-color: #785F37">
            <div class="container">
              <div class="row row-50 justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay=".5s">
                  <!-- Owl Carousel-->
                  <div class="owl-carousel owl-carousel-modern" data-items="1" data-dots="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false" data-autoplay="true">
                    <div class="quote-modern">
                      <div class="quote-modern-header">
                        <div class="quote-classic-avatar"><img src="images/logo5.png" alt="" width="100" height="100"/>
                        </div>
                        <div class="quote-classic-description">
                          <h4 class="quote-classic-name">Kate Peterson</h4>
                          <p class="quote-classic-position">Regular client</p>
                        </div>
                      </div>
                      <div class="quote-modern-body">
                        <p>Interia designed my home from top to bottom, and 5 years later I still appreciate their work. They designed built-in cabinetry that works perfectly. They are the most reliable designers I’ve ever met.</p>
                      </div>
                    </div>
                    <div class="quote-modern">
                      <div class="quote-modern-header">
                        <div class="quote-classic-avatar"><img src="images/logo5.png" alt="" width="100" height="100"/>
                        </div>
                        <div class="quote-classic-description">
                          <h4 class="quote-classic-name">Dananjaya Design</h4>
                          <p class="quote-classic-position">Regular client</p>
                        </div>
                      </div>
                      <div class="quote-modern-body">
                        <p>.......</p>
                      </div>
                    </div>
                    <div class="quote-modern">
                      <div class="quote-modern-header">
                        <div class="quote-classic-avatar"><img src="images/logo5.png" alt="" width="100" height="100"/>
                        </div>
                        <div class="quote-classic-description">
                          <h4 class="quote-classic-name">Dananjaya Design</h4>
                          <p class="quote-classic-position">Regular client</p>
                        </div>
                      </div>
                      <div class="quote-modern-body">
                        <p>......</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 col-lg-6 wow fadeInRight" data-wow-delay=".5s">
                  <div class="box-modern novi-bg">
                    <p class="box-modern-title">companies that trust us</p>
                    <ul class="box-modern-list">
                      <li><img src="images/kin.png" alt="" width="94" height="34"/>
                      </li>
                      <li><img src="images/kin.png" alt="" width="82" height="44"/>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <!-- Page Footer-->
        <footer class="section footer-classic bg-gray-900 novi-bg novi-bg-img">
            <div class="container">
            <div class="row row-30 justify-content-between">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                <ul>
                    <li>
                        <p class="footer-classic-title">Our Address</p>
                    </li>
                </ul>
                <ul class="footer-classic-list">
                    <li>Permata 1 Building, Bandung, Street PGA 108</li>
                </ul>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                <ul>
                    <li>
                        <p class="footer-classic-title">Socials</p>
                    </li>
                </ul>

                <ul class="footer-classic-list">
                    {{-- <li><a target="_blank" href="https://api.whatsapp.com/send/?phone=6289523941316&text&type=phone_number&app_absent=0">WhatsApp</a></li> --}}
                    <li><a target="_blank" style="text-decoration:none; ; color:#FFFFFF"  href="https://www.instagram.com/dananjayadesign">Instagram</a></li>
                    <li><a target="_blank" style="text-decoration:none; ; color:#FFFFFF" href="https://www.youtube.com/@omahin">YouTube</a></li>
                </ul>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                <ul>
                    <li>
                        <p class="footer-classic-title">WhatsApp</p>
                    </li>
                </ul>

                <ul class="footer-classic-list">
                    <li><a style="text-decoration:none; ; color:#FFFFFF" href="https://api.whatsapp.com/send/?phone=6289523941316&text&type=phone_number&app_absent=0">+62 895 2394 1316</a></li>
                </ul>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6">
                <ul>
                    <li>
                        <p class="footer-classic-title">Email</p>
                    </li>
                </ul>

                <ul class="footer-classic-list">
                    <li><a style="text-decoration:none; ; color:#FFFFFF" href="mailto:helpdesk@dananjayadesign.com">helpdesk@dananjayadesign.com</a></li>
                </ul>
                </div>
            </div>
            <div class="footer-classic-logo-wrap"><a class="brand" href="/"><img src="images/logo5.png" alt="" width="189" height="35"/></a>
            </div>
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Dananjaya Design</span><span>. All Rights Reserved.</span></p>
            </div>
        </footer>

    </div>





    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
</body>
</html>
