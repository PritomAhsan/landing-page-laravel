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
          <li><a class="nav-link scrollto" href="#service">Service</a></li>
          <li><a class="nav-link scrollto" href="#products">Our Products</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href="#portfolio"><span>Design</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            @foreach($categories as $category)
              <li class="dropdown"><a class="nav-link scrollto" href="#{{$category->slug}}"><span>{{$category->category_name}}</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  @foreach($category->subCategories as $scat)
                    <li><a class="nav-link scrollto" href="#{{$scat->slug}}">{{$scat->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              @endforeach
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#clients"><span>Certificates</span></a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#buyers">Buyers</a></li>
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
              <p class="animate__animated animate__fadeInUp fw-bold">We are an Apparel Buying and Sourcing company</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">INDIGODYE SOURCES</h2>
              <p class="animate__animated animate__fadeInUp fw-bold">We are an Apparel Buying and Sourcing company</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">INDIGODYE SOURCES</h2>
              <p class="animate__animated animate__fadeInUp fw-bold">We are an Apparel Buying and Sourcing company</p>
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
              <li><i class="bi bi-check2-circle"></i> Our <span class="text-uppercase fw-bold">mission</span> is to be a <span class="text-uppercase fw-bold">global leader</span> in the area of apparel buying and sourcing.</li>
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
    <section id="services" class="services">
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

    <section id="service" class="services section-bg">
        <div class="container">

          <div class="section-title">
            <h2 class="fw-bold">Our Strength</h2>
            <h4 class="fw-bold">END TO END SOURCING SOLUTION</h4>
          </div>

          <div class="row align-items-start">
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <h3 class="text-center">Fast Lead Time</h3>
                    <p style="text-align: justify">Nothing is more important than getting your garments on time for your launch. Once the order is confirmed, we will send each of our clients a strategic production plan based on the target ex-factory date to ensure the bulk can be shipped out on time. Our sampling lead time is 5-7 days not including the shipping time, and our bulk production lead time is 25-30 days after the prior-production (PP) samples are approved.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <h3 class="text-center">Flexible Minimum</h3>
                    <p style="text-align: justify">What makes us stand out is that we can work with flexible MOQ We believe in fostering the growth of small to medium-sized brands, and we recognize that keeping production quantities manageable is crucial for your success. That’s why we provide low Minimum Order Quantities (MOQs) that cater to your specific needs. Our flexible approach empowers you to launch new products with confidence, test different market segments, and adapt to changing demands without the burden of excess inventory. Your triumph is at the heart of our business philosophy, and we are dedicated to supporting your growth every step of the way. We will endeavor to meet your needs and requirements.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <h3 class="text-center">Competitive Price Point </h3>
                    <p style="text-align: justify">Being in garment industry for more than five years, we have comprehensive networks with various suppliers, including trims, fabrics and other accessories, empowering us to keep our price competitive and more efficient to our clients. We handle our clients’ shipments constantly as well. It saves our clients a lot of effort, and also help them to save shipping costs since we’ve been working with our nominated forwarders for years.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <h3 class="text-center">Quick Sampling</h3>
                    <p style="text-align: justify">Bring your creative vision to life with the support of our skilled design team. We understand the importance of seeing your ideas materialize before making a commitment, which is why we offer complimentary quotes and free shipping for samples. Whether you’re experimenting with new materials, styles, or prints, our hassle-free sampling process allows you to fine-tune your designs until they perfectly align with your vision, all without incurring additional costs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <h3 class="text-center">Flexible Payment Terms </h3>
                    <p style="text-align: justify">Our Factories have strength in offering flexible payment terms. Providing unique financial needs to our customers for long lasting partnership. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <h3 class="text-center">Ethical and sustainable</h3>
                    <p style="text-align: justify">Customer can offer fashion apparels that not only reduces the impact on the environment but is also mindful of the people who work to produce the garments. Put simply, it is fashion that is ethically made and environmentally friendly. This includes using eco-friendly materials, such as organic cotton, hemp, and bamboo, and implementing sustainable production practices using less water and energy. Additionally, there will likely be an increased focus on circular fashion, which involves designing clothes to be reused, recycled, or repurposed.</p>
                </div>
            </div>
          </div>


        </div>
    </section><!-- End Services Section -->

    <section id="products" class="team products">
        <div class="container">

          <div class="section-title">
            <h2 class="fw-bold">Our Products</h2>
            <h3 class="fw-bold">Profession, Small Batch Production, High Quality Manufacturing</h3>
          </div>

          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <div class="member member-title">
                <h4 class="text-uppercase">Fashion</h4>
              </div>
              <div class="member member-body mt-3">
                <h4 class="text-uppercase">Fine Knits</h4>
                <h4 class="text-uppercase">Shirts</h4>
                <h4 class="text-uppercase">Bottoms</h4>
                <h4 class="text-uppercase">Flat Knits</h4>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member member-title">
                <h4 class="text-uppercase">Sports</h4>
              </div>
              <div class="member member-body mt-3">
                <h4 class="text-uppercase">Active wear</h4>
                <h4 class="text-uppercase">leisure fleece</h4>
                <h4 class="text-uppercase">joggers</h4>
                <h4 class="text-uppercase">team wear</h4>
                <h4 class="text-uppercase">training t-shirts</h4>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member member-title">
                <h4 class="text-uppercase">Essentials</h4>
              </div>
              <div class="member member-body mt-3">
                <h4 class="text-uppercase">jackets</h4>
                <h4 class="text-uppercase">corporate shirts</h4>
                <h4 class="text-uppercase">corporate polo</h4>
                <h4 class="text-uppercase">workwear</h4>
                <h4 class="text-uppercase">medical wear</h4>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Our Team Section -->

    <!-- ======= Call To Action Section ======= -->
    <section class="call-to-action">
      <div class="container">

        <div class="text-center">
          <h3>Our profile</h3>
          <p>With years of experience in the industry, <b>INDIGODYE SOURCES</b> is here to serve our customers, and take the stress out of the sampling to production process. We have helped our clients and grow their clothing line, and helped brands that have been in this industry for years to develop premium products for their consumers. .
            <br>
            If you are looking for a partner to grow and scale with you, we can fill your needs!
            </p>
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
              @foreach ($categories as $cat)
                <li data-filter=".filter-{{$cat->slug}}">{{$cat->category_name}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
            @foreach ($products as $product)
            <div id="{{$product->subCategory->slug}}" class="col-lg-4 col-md-6 portfolio-item filter-{{$product->category->slug}}">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/products/'.$product->image)}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="{{asset('assets/img/products/'.$product->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$product->product_name}}">{{$product->product_name}}</a></h3>
                    <div>
                      <a href="{{asset('assets/img/products/'.$product->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$product->product_name}}"><i class="bi bi-plus"></i></a>
                      {{-- <a href="portfolio-details.html" title="Details"><i class="bi bi-link"></i></a> --}}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

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
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" width="120px">
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
                    <img src="assets/img/clients/client-8.png" class="img-fluid" alt="" width="120px">
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
          <h2 class="fw-bold">Meet our Founder</h2>
        </div>

        <div class="row align-items-center gy-4">
          <div class="col-lg-6 col-md-6">
            <div class="founder text-center">
              <img src="assets/img/founder.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="member">
              <p>
                We decided to create a professional organization at the source to providing solutions and adding value to the supply chain. <b>INDIGODYE SOURCES</b> has earned its name, value and credibility through the smart work, efforts and strong commitment towards quality products for every customer. We believe in providing our customer with high quality product along with the high standard of service because we feel that product and service are integral part of each other. We assure our customers of highest quality standards in all respect and stand behind our product. We put great quality management systems being followed at our Factories. As the Founder and CEO of INDIGODYE SOURCES, I see our success target as quality Products at all times and also innovative perspective. I would like to express my thanks to everyone who kept sharing this passion with us.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <section id="buyers" class="clients section-bg">
        <div class="container">

            <div class="section-title">
                <h2 class="fw-bold">Buyers</h2>
                <p class="fw-bold">Buyers List</p>
              </div>

          <div class="row no-gutters clearfix wow fadeInUp justify-content-center">

            <div class="col-lg-2 col-xs-6">
              <div class="client-logo buyer-logo">
                <img src="assets/img/buyers/b1.png" class="img-fluid" alt="" width="60px">
              </div>
            </div>

            <div class="col-lg-2 col-xs-6">
              <div class="client-logo buyer-logo">
                <img src="assets/img/buyers/b2.jpg" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-2 col-xs-6">
              <div class="client-logo buyer-logo">
                <img src="assets/img/buyers/b3.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-2 col-xs-6">
              <div class="client-logo buyer-logo">
                <img src="assets/img/buyers/b4.jpg" class="img-fluid" alt="" width="120px">
              </div>
            </div>

            <div class="col-lg-2 col-xs-6">
              <div class="client-logo buyer-logo">
                <img src="assets/img/buyers/b5.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
          <div class="row no-gutters clearfix wow fadeInUp justify-content-center">

            <div class="col-lg-2 col-xs-6">
              <div class="client-logo buyer-logo">
                <img src="assets/img/buyers/b6.jpg" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-2 col-xs-6">
              <div class="client-logo buyer-logo">
                <img src="assets/img/buyers/b7.jpg" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-2 col-xs-6">
              <div class="client-logo buyer-logo">
                <img src="assets/img/buyers/b8.jpg" class="img-fluid" alt="" width="120px">
              </div>
            </div>

            <div class="col-lg-2 col-xs-6">
                <div class="client-logo buyer-logo">
                  <img src="assets/img/buyers/b9.jpg" class="img-fluid" alt="">
                </div>
              </div>

              <div class="col-lg-2 col-xs-6">
                <div class="client-logo buyer-logo">
                  <img src="assets/img/buyers/b10.jpg" class="img-fluid" alt="" width="120px">
                </div>
              </div>
          </div>

        </div>
      </section>

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 class="fw-bold">Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="contact-about">
              <h3>INDIGODYE SOURCES</h3>
              <p>We are an Apparel Buying and Sourcing company</p>

            </div>

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

          <div class="col-lg-6 col-md-12">
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

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <p class="fw-bold mb-1">Products and Services</p>
                <ul class="list-unstyled">
                    <li><a class="nav-link scrollto" href="#products">Fashion</a></li>
                    <li><a class="nav-link scrollto" href="#products">Sports</a></li>
                    <li><a class="nav-link scrollto" href="#products">Essentials</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <p class="fw-bold mb-1">Company Info</p>
                <ul class="list-unstyled">
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <p class="fw-bold mb-1">Customer Enquiries</p>
                <ul class="list-unstyled">
                    <li><a class="nav-link scrollto active" href="#contact">Contact Us</a></li>
                    <li><a class="nav-link scrollto" href="#clients">Certificates</a></li>
                    <li><a class="nav-link scrollto" href="#buyers">Buyers</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6">
                <p class="fw-bold mb-1">Product Types</p>
                <ul class="list-unstyled">
                    <li><a class="nav-link scrollto active" href="#portfolio">Man</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Women</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Kids</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                {{-- <p class="fw-bold mb-1">Products and Services</p> --}}
                <ul class="list-unstyled">
                    <li><a class="nav-link scrollto active" href="#portfolio">Outwear</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Workwear</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Active Wear</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Medical Wear</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="social-links text-end">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
                <div class="credits  text-end">
                    Designed by <a href="{{url('/')}}">INDIGODYE SOURCES</a>
                </div>

                <div class="copyright  text-end">
                    &copy; Copyright <strong><span>INDIGODYE</span></strong>. All Rights Reserved
                </div>

            </div>
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
