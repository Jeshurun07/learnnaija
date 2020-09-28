<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LearnNaija:: Strictly for serious students</title>

    <meta content="" name="LearnNaija is a self-test platform for students getting ready for exams in Nigeria and West Africa. This platform helps student assess their level of readiness">
    <meta content="" name="WAEC examination NECO tertiary university polytechnic nigeria west africa">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href = "{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('css/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('css/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('css/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('css/venobox/venobox.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('css/venobox/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Resi - v2.1.0
  * Template URL: https://bootstrapmade.com/resi-free-bootstrap-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@extends('layouts.app')
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">LearnNaija</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    @if (Route::has('login'))
                    @auth
                    <li> <a href="{{ url('/') }}">Home</a></li>
                    @else
                       <li> <a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
            <li><a href="#">Frequently Asked</a></li>
                    <li><a href="#">Contact</a></li>


</ul>
</nav>
<!-- .nav-menu -->
                     <!--Unused dropdown<li class="drop-down"><a href="">Drop Down</a>
                       <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="drop-down"><a href="#">Deep Drop Down</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>--> </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                <div class="card-body">
<form method="POST" action="landing">
                        @csrf
    <div>
<label for="subject">Level</label>
<select name="level" id="level">
<option value="adv">Advance (JAMB, 'A'levels) </option>
<option value="int">Intermediate (WAEC, NECO) </option>
<option value="basic">Basic(BECE, NABTEB) </option>
</select><br />
<label for="subject">Select subject</label>
<select name="subj" id="subj">
<option value="bio">Biology</option>
<option value="cmm">Commerce</option>
</select><br />
<input name='submit' id="submit" type="submit"></input>
</form>
<!--Will come back to the display using jquery later*-->
<div id="js-jss-subj" style="display: none">

		<div id="js-sss-subj" style="display: none">
	 		<h2>Step 2: Select the Subject</h2>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_5" class="form-check-input" value="eng">
					<label class="form-check-label" for="rad_5">English Language</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_6" class="form-check-input" value="mth">
					<label class="form-check-label" for="rad_6">Mathematics</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_7" class="form-check-input" value="phy">
					<label class="form-check-label" for="rad_7">Physics</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_8" class="form-check-input" value="bio">
					<label class="form-check-label" for="rad_8">Biology</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_9" class="form-check-input" value="cmm">
					<label class="form-check-label" for="rad_9">Commerce</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_10" class="form-check-input" value="chm">
					<label class="form-check-label" for="rad_10">Chemistry</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_11" class="form-check-input" value="eco">
					<label class="form-check-label" for="rad_11">Economics</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_12" class="form-check-input" value="gov">
					<label class="form-check-label" for="rad_12">Government</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_13" class="form-check-input" value="phy">
					<label class="form-check-label" for="rad_13">Physics</label>
			</div>
			<div class="form-check">
					<input type="radio" name="subject" id="rad_14" class="form-check-input" value="acc">
					<label class="form-check-label" for="rad_14">Principles of Accounts</label>
			</div>
            </div>
        </div>

    </section>
    <!-- End Hero -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                        quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
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
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Resi.</h3>
                        <p>
                            A108 Adam Street <br> New York, NY 535022<br> United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Resi</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script type="text/javascript" src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/counterup/counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/venobox/venobox.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jsfile.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>