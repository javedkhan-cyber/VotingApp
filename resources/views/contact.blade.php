@extends('layouts.app') 
@section('content')

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v2.0.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-color: lightblue;margin-top:-2rem; background-image: url('images/vote_front.jpg');">

    <div class="container" >
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up" style="color: lightblue;">Voting System</h1>
          <h2 data-aos="fade-up" data-aos-delay="400" style="color: lightblue;">It is a voting website.</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#contact" class="btn-get-started scrollto">Contact Us</a>
          </div>
        </div>
        
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

  
     

    <!-- ======= About Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Voting System</h3>
              <p style="color: white;">A vote is a formal expression of an individual's choice for or against some motion (for example, a proposed resolution); for or against some ballot question; or for a certain candidate, selection of candidates, or political party.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p style="color:white;">LDA Colony,<br> Lucknow, Uttar Pradesh</p>
              </div>
              <div>
                <i class="fa fa-envelope-o"></i>
                <p style="color:white;">info@example.com</p>
              </div>
              <div>
                <i class="fa fa-phone"></i>
                <p style="color:white;">+91-9876543210 India</p>
              </div>

            </div>
          </div>
          
          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
             @if($message = Session::get('success'))
              <div class="alert alert-success">
             <p>{{$message}}</p>
             </div>
             @endif
              @if($message = Session::get('error'))
                <div class="alert alert-danger" style="margin-bottom: 0px;"> <p>{{$message}}</p></div>
                @endif
            <form action="{{route('home.ContactStoreDetails')}}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border-radius: 1rem !important" required="required" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control borderRadius" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" style="border-radius: 1rem !important" required="required" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" style="border-radius: 1rem !important" required="required" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Type Your Message..." style="border-radius: 1rem !important" required="required"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    
   
  </main><!-- End #main -->

  

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

@endsection