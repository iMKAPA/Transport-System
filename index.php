<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Transys | Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">



  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> 
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    @media (max-width: 753px) {
    #header .container-fluid .conta {
        visibility: hidden;
    }
}

</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" >
    <div class="container-fluid d-flex align-items-center justify-content-between">

       <h1 class="logo"><a href="index.php"><t style="color:blue">Tran<t style="color:red">sys</a></h1> 
      
       <!-- <a href="index.php" class="logo"><img src="assets/img/Buslogo1.png" alt="" class="img-fluid" ></a> 
      <div class="conta" style="margin-left:2rem;font-family: Tahom;">
      <a href="mailto:kefarop98@gmail.com">
      <button style="background-color:transparent; border-color:white">
      <i class="icofont-email icofont x2" style="color:#BB001B;"></i></button>
     <span style="color:#BB001B; font-size: 20px;"> araknet@co.ke</span> </a>

    <a href="mailto:olalavictor01@gmail.com"style="margin-left:1rem;">
      */<button style="background-color:transparent; border-color: #fff;">
      <i class="icofont-brand-whatsapp" style="color: #4FCE5D;"></i></button>
     <span style="color: #4FCE5D;"> +254 7 90 590 653</span> </a>
      </div>-->


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>

          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->



    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="booking-cta">
              <h1>Book <t style="transorm:lowercase">Transys</t></h1>
              <h2>Have easy time. Enjoy yourself at Transys Services. Travel Safe and Sound</h2>
            </div>
            <a href="user_login.php" class="btn btn-primary mr-5 ml-4">LOGIN <i class='bx bx-log-in-circle'></i>  </a>
            <a href="#about" class="btn btn-primary"> Read More <i class='bx bx-chevrons-down'></i></a>

          </div>
          <div class="col-md-6 col-md-offset-1">
            <div class="booking-form">
              <form method="POST" action="trains.php">

                <div class="row">


                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Departure</span>
                      <select class="custom-select col-12" name="route" style="background-color: rgb(235, 235, 235); color: rgb(7, 7, 7);">

                        <option>Migori</option>  
                        <option>Nairobi</option>
                        <option>Kisumu</option>
                        <option>Mombasa</option>
                        <option>Nakuru</option>
                        <option>Eldoret</option>
                        <option>Kisii</option>
                        <option>Kitale</option>
                        <option>Awendo</option>

                      </select>

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <span class="form-label">Destination</span>
                    <select class="custom-select col-12" name="route_two" style="background-color: rgb(235, 235, 235); color: rgb(7, 7, 7);">


                        <option>Migori</option>
                        <option>Kisumu</option>
                        <option>Mombasa</option>
                        <option>Nakuru</option>
                        <option>Eldoret</option>
                        <option>Kisii</option>
                        <option>Kitale</option>
                        <option>Nairobi</option>
                        <option>Awendo</option>

                      </select>

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Travelling Date</span>
                      <input class="custom-select col-12" name="date" placeholder="Select Date" type="date" style="background-color:rgb(235, 235, 235); color: rgb(12, 12, 12);" required min="<?php echo Date("Y-m-d") ?>">

                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Travelling Time</span>
                      <input class="custom-select col-12" name="tdate" placeholder="Select Time" type="time" style="background-color:rgb(235, 235, 235); color: rgb(12, 12, 12);" required min="<?php echo Date("Y-m-d") ?>">

                    </div>
                  </div> 
                </div>


                <div class="form-btn">

                  <!-- <button class="submit-btn" type="submit" name="check">Check Bus Available</button> -->
                  <input type="submit" value="Check Bus Available" name="submit" class="submit-btn">
                  <!-- <div class="col-md-12 col-md-offset-1">
                  <a href="Bus.php" class="get-started-btn scrollto">Check Bus Available</a>
                </div> -->
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-2 col-md-offset-1">
          <div class="social-icons">
            <ul class="list-unstyled text-center mb-0">
              <li class="list-unstyled-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              </li>
              <li class="list-unstyled-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              </li>
              <li class="list-unstyled-item">
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              </li>
            </ul>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  </section><!-- End Hero -->


  <main id="main">
    <section id="about" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="section-title">
            <h2>TOP ROUTES</h2>
            <p></p>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-3">
            <div class="icon-box" style="background-color: rgb(243, 243, 243);">
              <img src="assets/img/img4.jpg" style="border-radius: 50%; width: 50%; border:double;">
              <!-- <i class="icofont-computer"></i> -->
              <h4 style="margin-left: 0rem; margin-top: 1rem;"><a href="#book">Kisumu - Nairobi</a></h4>
            </div>
          </div>

          <div class="col-md-3">
            <div class="icon-box" style="background-color: rgb(243, 243, 243);">
              <img src="assets/img/img2.jpg" style="border-radius: 50%; width: 50%; border:double;">
              <!-- <i class="icofont-computer"></i> -->
              <h4 style="margin-left: 0rem; margin-top: 1rem;"><a href="#book">Kisumu - Nakuru</a></h4>
            </div>
          </div>

          <div class="col-md-3">
            <div class="icon-box" style="background-color: rgb(243, 243, 243);">
              <img src="assets/img/img2.jpg" style="border-radius: 50%; width: 50%; border:double;">
              <!-- <i class="icofont-computer"></i> -->
              <h4 style="margin-left: 0rem; margin-top: 1rem;"><a href="#book">Awendo - Migori</a></h4>
            </div>
          </div>

          <div class="col-md-3">
            <div class="icon-box" style="background-color: rgb(243, 243, 243);">
              <img src="assets/img/img2.jpg" style="border-radius: 50%; width: 50%; border:double;">
              <!-- <i class="icofont-computer"></i> -->
              <h4 style="margin-left: 0rem; margin-top: 1rem;"><a href="#book">Awendo - Migori</a></h4>

            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box" style="background-color: rgb(243, 243, 243);">
              <img src="assets/img/img2.jpg" style="border-radius: 50%; width: 50%; border:double;">
              <!-- <i class="icofont-computer"></i> -->
              <h4 style="margin-left: 0rem; margin-top: 1rem;"><a href="#book">Awendo - Migori</a></h4>

            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box" style="background-color: rgb(243, 243, 243);">
              <img src="assets/img/img2.jpg" style="border-radius: 50%; width: 50%; border:double;">
              <!-- <i class="icofont-computer"></i> -->
              <h4 style="margin-left: 0rem; margin-top: 1rem;"><a href="#book">Awendo - Migori</a></h4>

            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box" style="background-color: rgb(243, 243, 243);">
              <img src="assets/img/img3.jpg" style="border-radius: 50%; width: 50%; border:double;">
              <!-- <i class="icofont-computer"></i> -->
              <h4 style="margin-left: 0rem; margin-top: 1rem;"><a href="#book">Nakuru - Nairobi</a></h4>

            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box" style="background-color: rgb(243, 243, 243);">
              <img src="assets/img/img4.jpg" style="border-radius: 50%; width: 50%; border:double;">
              <!-- <i class="icofont-computer"></i> -->
              <h4 style="margin-left: 0rem; margin-top: 1rem;"><a href="#book">Nakuru - Kisumu</a></h4>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Top cities Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">



        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/background (2).jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> s
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>About Transys.</h3>
            <p class="font-italic">
            Transys is one of the leading Hybrid travel company founded in Africa.
            Transys is a subsidiary of Road Trip Brands, Kenyan Multinational Travel group.

            Transys, a member of the Kenya Trnasport Systems, is a leading Kenyan Bus travelling to over 15 destinations countrywide.
              It continues to modernize its travels with its 8 Bus being some of the youngest in Africa.
              The on-board service is renowned and the lie-flat business class seat on the wide-body Bus is consistently voted among the Kenya’s top 10.
              <br>Transys takes pride in being at the forefront of connecting Kenya to the rest of the countries.

Transys celebrated 5 years of operations in April 2021 and was named Kenya Leading Railway Trasport 2021 by the Kenyans Travel Awards.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="icofont-money"></i>
              <h4><a href="#">Best Prices Guaranteed</a></h4>
              <p>Assured Lowest Prices- Unmatched and unbeatable prices on offer!</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-users"></i>
              <h4><a href="#">Satisfied Customers</a></h4>
              <p>Serving millions of happy travelers worldwide.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-car"></i>
              <h4><a href="#">Exclusive Deals & Offers</a></h4>
              <p>Incomparable deals you won’t find elsewhere.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-phone"></i>
              <h4><a href="#">Superior Customer Service</a></h4>
              <p>Something we pride ourselves for!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

        <div class="testimonial-item">
            <i class="icofont-user icofont-3x"></i>
            <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
            <h3>Benjamkapa</h3>
            <h4></h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              I loved it from the first time I used it.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>        
          <div class="testimonial-item">
            <i class="icofont-user icofont-3x"></i>
            <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
            <h3>Isabelle</h3>
            <h4</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              The site is user friendly and easy to use. On travel side, it was the best
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
          <div class="testimonial-item">
            <i class="icofont-user icofont-3x"></i>
            <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
            <h3>Metabel</h3>
            <h4></h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              I love it. Transys has easen everything on my side. The travel was safe and sound
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">

      <div class="container">

          <div class="section-title">
            <h2>Contact Us</h2>
            <p>Leave us with your feedback</p>

        </div>
        <div class="row justify-content-center">
          <div class="col-lg-11" style="backgroung-color:transparent;">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-md-8 d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                    <h3 class="mb-4">Leave us a short Message</h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">
                      Your message was sent, thank you!
                    </div>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm" action="mess.php">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Type Here..."></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">

                            <input type="submit" name="sub" value="Send Message" class="btn btn-primary" style="border-radius:25px">

                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                  <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                    <h3>Contact Us</h3>
                    <p class="mb-4">We Are Open for Any Suggestion or Consultation</p>
                    <div class="dbox w-100 d-flex align-items-start">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <i class="icofont-home icofont-3x"></i>
                      </div>
                      <div class="text pl-3">
                        <p> <span style="color: #f35322; font-family: sans-serif; font-weight: bold;">Nairobi, Kenya</span> </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <i class="icofont-phone icofont-3x"></i>
                      </div>
                      <div class="text pl-3">
                        <p> <a href="tel://+254 790 590 653"><span style="color: #f35322; font-family: sans-serif; font-weight: bold;">+254 790 590 653</span> </a></p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <i class="icofont-email icofont-3x"></i>
                        <!-- <span class="fa fa-paper-plane"></span> -->
                      </div>
                      <div class="text pl-3">
                        <p><a href="mailto:anonymityiskey9823@gmail.com"><span style="color: #f35322; font-family: sans-serif; font-weight: bold;">Transys@co.ke</span> </a></p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <i class="icofont-brand-whatsapp icofont-2x"></i>
                      </div>
                      <div class="text pl-3">
                        <p><a href="mailto:underthe1shades@gmail.com"><span style="color: #f35322; font-family: sans-serif; font-weight: bold;"> +254 790 590 653</span></a></p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span style="color:blue">Tran<t style="color: red">sys</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- Designed by <a href="https://olalatheexpert.io.github/">olalavictor</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
  <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
 <a href="#" class="whatsup"><i class="icofont-brand-whatsapp"></i></a>
  <a href="mailto:underthe1shades@gmail.com" class="email"><i class="icofont-email"></i></a>


  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


