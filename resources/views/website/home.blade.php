<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INDIGODYE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html"><img src="{{asset('assets/img/Picture1.png')}}"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="dropdown"><a href="#portfolio"><span>Portfolio</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#portfolio"><span>Man</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#portfolio">T-SHIRT</a></li>
                  <li><a href="#portfolio">POLO</a></li>
                  <li><a href="#portfolio">Hoodies</a></li>
                  <li><a href="#portfolio">Sweatshirts</a></li>
                  <li><a href="#portfolio">SWEATERS & CARDIGANS</a></li>
                  <li><a href="#portfolio">Shirt </a></li>
                  <li><a href="#portfolio">Jacket </a></li>
                  <li><a href="#portfolio">Jeans </a></li>
                  <li><a href="#portfolio">Pants</a></li>
                  <li><a href="#portfolio">Cargo </a></li>
                  <li><a href="#portfolio">Linen  </a></li>
                  <li><a href="#portfolio">Shorts </a></li>
                  <li><a href="#portfolio">Swimwear </a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>WOMAN</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#portfolio">T-SHIRT</a></li>
                  <li><a href="#portfolio">Knit wear </a></li>
                  <li><a href="#portfolio">SWEATERS & CARDIGANS</a></li>
                  <li><a href="#portfolio">Shirt </a></li>
                  <li><a href="#portfolio">Jacket </a></li>
                  <li><a href="#portfolio">Jeans </a></li>
                  <li><a href="#portfolio">Pants</a></li>
                  <li><a href="#portfolio">Skirts </a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>KIDS ( Boys & Girls)</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#portfolio">TEE-SHIRT</a></li>
                  <li><a href="#portfolio">DRESS</a></li>
                  <li><a href="#portfolio">TROUSERS - JOGGING PANTS</a></li>
                  <li><a href="#portfolio">JEANS</a></li>
                  <li><a href="#portfolio">SHIRT - BLOUSE</a></li>
                  <li><a href="#portfolio">SWEATSHIRT </a></li>
                  <li><a href="#portfolio">PULLOVER - CARDIGAN </a></li>
                  <li><a href="#portfolio">SKIRT </a></li>
                  <li><a href="#portfolio">SHORTS</a></li>
                  <li><a href="#portfolio">JUMPSUITS - DUNGAREES </a></li>
                  <li><a href="#portfolio">LEGGINGS - TREGGINGS  </a></li>
                  <li><a href="#portfolio">TROUSERS SIZE + </a></li>
                  <li><a href="#portfolio">SWIMWEAR </a></li>
                  <li><a href="#portfolio">ROLL-NECK-JUMPER </a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  {{-- <section id="hero">
    <div class="hero-container">
      <h1>INDIGODYE SOURCES</h1>
      <h2>We are an Apparel Buying and Sourcing company</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- #hero --> --}}

  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">INDIGODYE SOURCES</span></h2>
              <p class="animate__animated animate__fadeInUp">We are an Apparel Buying and Sourcing company</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">INDIGODYE SOURCES</h2>
              <p class="animate__animated animate__fadeInUp">We are an Apparel Buying and Sourcing company</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">INDIGODYE SOURCES</h2>
              <p class="animate__animated animate__fadeInUp">We are an Apparel Buying and Sourcing company</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2 class="fw-bold">About Us</h2>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h2>A Vision for The Future</h2>
            <p class="fst-italic">
                <span class="about-btext">The Best </span><small>All types of </small> <span class="about-btext">Apparels</span> <small>at The</small> <span class="about-btext">Best Price</span> <small>Possible & The</small> <span class="about-btext">Best Service</span>
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> We are a global <span class="text-uppercase fw-bold">apparel buying</span> and <span class="text-uppercase fw-bold">sourcing</span> company from Bangladesh since 2018.</li>
              <li><i class="bi bi-check2-circle"></i> Through the years we have created a platform for brand and retailers of the glob where <span class="text-uppercase fw-bold">CUSTOMER</span> can trust us.</li>
              <li><i class="bi bi-check2-circle"></i> Our <span class="text-uppercase fw-bold">mission</span> is to be a <span class="text-uppercase fw-bold">global</span> leader in the area of apparel buying and sourcing.</li>
            </ul>
            {{-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p> --}}
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 class="fw-bold">WHAT WE OFFER</h2>
          <h4 class="fw-bold">END TO END SOURCING SOLUTION</h4>
        </div>

        <div class="row align-items-end">
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/icons/1.png" width="50"></div>
            <h4 class="title"><a href="#">PARTNERSHIP</a></h4>
          </div>
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/icons/2.jpg" width="50"></div>
            <h4 class="title"><a href="#">DESIGN &
                INNOVATION
                </a></h4>
          </div>
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/icons/3.png" width="50"></div>
            <h4 class="title"><a href="#">PRODUCT
                DEVELOPMENT
                </a></h4>
          </div>
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/icons/4.png" width="50"></div>
            <h4 class="title"><a href="#">COSTING
            </a></h4>
          </div>
        </div>
        <div class="row align-items-end">
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/icons/5.png" width="50"></div>
            <h4 class="title"><a href="#">MANAGING
                SUPPLY CHAIN
                </a></h4>
          </div>
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/icons/6.png" width="50"></div>
            <h4 class="title"><a href="#">QUALITY
                ASSURANCE
                </a></h4>
          </div>
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/icons/7.png" width="50"></div>
            <h4 class="title"><a href="#">COMPLAINCE
            </a></h4>
          </div>
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/icons/8.png" width="50"></div>
            <h4 class="title"><a href="#">DELIVER
            </a></h4>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section class="call-to-action">
      <div class="container">

        <div class="text-center">
          <h3>Our profile</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Download</a>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2  class="fw-bold">Our Portfolio</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Man</li>
              <li data-filter=".filter-card">Woman</li>
              <li data-filter=".filter-web">Kids</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">App 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/M1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/k1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/k1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3">Web 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/k1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2">App 2</a></h3>
                <div>
                  <a href="assets/img/portfolio/M2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/W1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/W1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2">Card 2</a></h3>
                <div>
                  <a href="assets/img/portfolio/W1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/k2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/k2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2">Web 2</a></h3>
                <div>
                  <a href="assets/img/portfolio/k2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/W2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/W2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1">Card 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/W2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/W3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/W3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3">Card 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/W3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/k3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/k3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1">Web 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/k3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/W4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/W4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3">Card 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/W4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/W5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/W5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3">Card 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/W5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/k4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/k4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1">Web 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/k4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/k7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/k7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1">Web 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/k7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/W6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/W6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3">Card 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/W6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/k6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/k6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1">Web 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/k6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/k8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/k8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1">Web 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/k8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M10.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/k11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/k11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1">Web 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/k11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/M12.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/M12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/M12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/k10.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/k10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1">Web 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/k10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="section-title">
                    <h2 class="fw-bold">Certifications</h2>
                    <p class="fw-bold">Our Manufacturing Partners are Compliant with INTERNATIONAL Standards and Code of Conduct</p>
                  </div>

              <div class="row no-gutters clearfix wow fadeInUp">

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                  </div>
                </div>

              </div>

            </div>
          </section>

      <!-- End Frequently Asked Questions Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2 class="fw-bold">Our Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="contact-about">
              <h3>INDIGODYE SOURCES</h3>
              <p>We are an Apparel Buying and Sourcing company</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>House 31, Road 09, Section 2,<br>
                    Mirpur, Dhaka-1216, Bangladesh</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>ruhin@indigodyesources.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+8801799467987</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

    <!-- ======= Map Section ======= -->
    <section class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>INDIGODYE</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="{{url('/')}}">INDIGODYE SOURCES</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
