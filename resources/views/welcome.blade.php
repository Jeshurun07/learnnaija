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
    <link href = "{{ URL::asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('venobox/venobox.css') }}" rel="stylesheet">
    <link href = "{{ URL::asset('venobox/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    
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
            @section('content')
                <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <p>
                    LearnNaija is a free online resource for students preparing for national exams in Nigeria and West Africa. This resource allows you to take tests, see your result and take more tests until you reach your goal.
                    </p>
                    <ul>How to make the most of this resource
                        <li><i class="ri-check-line"></i>Set a goal (e.g. 80% in a subject or in all subjects)</li>
                        <li><i class="ri-check-line"></i> <a href="{{ route('register') }}">Register</a>/<a href="{{ route('login') }}">Login</a> </li>
                        <li><i class="ri-check-line"></i> Take a first test</li>
                        <li><i class="ri-check-line"></i> Review your scores</li>
                        <li><i class="ri-check-line"></i> Study more and take more tests until you reach your goal</li>
                        <li><i class="ri-check-line"></i> A few weeks to the exam, revise and take more tests</li>
                        <li><i class="ri-check-line"></i> Make sure your scores are consistent i.e. you constantly score between 5-7% of range</li>
                        <li><i class="ri-check-line"></i> Go for your exams</li>
                        <li><i class="ri-check-line"></i> Finally, send us your feedback</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ URL::asset('img/student.jpg') }}" rel="stylesheet" class="img-fluid">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->



        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <ul class="faq-list">

                    <li>
                        <a data-toggle="collapse" class="" href="#faq1">Is this resource really free <i class="icofont-simple-up"></i></a>
                        <div id="faq1" class="collapse show" data-parent=".faq-list">
                            <p>
                                Yes it is! No hidden fees nor charges for its use any time in future. We might introduce a premium package in future.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">Are these standard exam questions? <i class="icofont-simple-up"></i></a>
                        <div id="faq2" class="collapse" data-parent=".faq-list">
                            <p>
                                The questions are culled from past questions and the answers are graded by highly rated teachers. However, students and users of this resource should be aware that this resource is for practice only. They should not be taken as questions they will encounter in a real exam.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">How often are these questions reviewed and updated?<i class="icofont-simple-up"></i></a>
                        <div id="faq3" class="collapse" data-parent=".faq-list">
                            <p>
                                We add new questions as soon as they are graded and rated by our faculty. This depends on the availability of questions.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">How do we contact you? <i class="icofont-simple-up"></i></a>
                        <div id="faq4" class="collapse" data-parent=".faq-list">
                            <p>
                                Check our contact details below.
                            </p>
                        </div>
                    </li>

                   <!-- <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
                        <div id="faq5" class="collapse" data-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
                        <div id="faq6" class="collapse" data-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque
                                diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>-->

                </ul>

            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
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
                                    <p>info@learnnaija.com<br>contact@learnnaija.com</p>
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
                        <h3>LearnNaija</h3>
                        <p>
                            A108 Adam Street <br> New York, NY 535022<br> United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@learnnaija.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
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
                        <li><a href="#faq">Frequently Asked</a></li>
                    <li><a href="#contact">Contact</a></li>
                    </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <!--<h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>-->

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>For information on schools and books</p>
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
                    &copy; Copyright <strong><span>learnnaija</span></strong>. All Rights Reserved
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>