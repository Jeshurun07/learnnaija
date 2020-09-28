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
    <h1>Register here</h1>
<form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <select id="country" class="form-control" name="country">
                                <option value="">Country</option>
                                <option value="af">Afghanistan</option>
                                <option value="ax">Åland Islands</option>
                                <option value="al">Albania</option>
                                <option value="dz">Algeria</option>
                                <option value="as">American Samoa</option>
                                <option value="ad">Andorra</option>
                                <option value="ao">Angola</option>
                                <option value="ai">Anguilla</option>
                                <option value="aq">Antarctica</option>
                                <option value="ag">Antigua and Barbuda</option>
                                <option value="ar">Argentina</option>
                                <option value="am">Armenia</option>
                                <option value="aw">Aruba</option>
                                <option value="au">Australia</option>
                                <option value="at">Austria</option>
                                <option value="az">Azerbaijan</option>
                                <option value="bs">Bahamas</option>
                                <option value="bh">Bahrain</option>
                                <option value="bd">Bangladesh</option>
                                <option value="bb">Barbados</option>
                                <option value="by">Belarus</option>
                                <option value="be">Belgium</option>
                                <option value="bz">Belize</option>
                                <option value="bj">Benin</option>
                                <option value="bm">Bermuda</option>
                                <option value="bt">Bhutan</option>
                                <option value="bo">Bolivia</option>
                                <option value="ba">Bosnia and Herzegovina</option>
                                <option value="bw">Botswana</option>
                                <option value="bv">Bouvet Island</option>
                                <option value="br">Brazil</option>
                                <option value="io">British Indian Ocean Territory</option>
                                <option value="bn">Brunei Darussalam</option>
                                <option value="bg">Bulgaria</option>
                                <option value="bf">Burkina Faso</option>
                                <option value="bi">Burundi</option>
                                <option value="kh">Cambodia</option>
                                <option value="cm">Cameroon</option>
                                <option value="ca">Canada</option>
                                <option value="cv">Cape Verde</option>
                                <option value="ky">Cayman Islands</option>
                                <option value="cf">Central African Republic</option>
                                <option value="td">Chad</option>
                                <option value="cl">Chile</option>
                                <option value="cn">China</option>
                                <option value="cx">Christmas Island</option>
                                <option value="cc">Cocos (Keeling) Islands</option>
                                <option value="co">Colombia</option>
                                <option value="km">Comoros</option>
                                <option value="cg">Congo</option>
                                <option value="cd">Congo, The Democratic Republic of The</option>
                                <option value="ck">Cook Islands</option>
                                <option value="cr">Costa Rica</option>
                                <option value="ci">Cote D'ivoire</option>
                                <option value="hr">Croatia</option>
                                <option value="cu">Cuba</option>
                                <option value="cy">Cyprus</option>
                                <option value="cz">Czech Republic</option>
                                <option value="dk">Denmark</option>
                                <option value="dj">Djibouti</option>
                                <option value="dm">Dominica</option>
                                <option value="do">Dominican Republic</option>
                                <option value="ec">Ecuador</option>
                                <option value="eg">Egypt</option>
                                <option value="sv">El Salvador</option>
                                <option value="gq">Equatorial Guinea</option>
                                <option value="er">Eritrea</option>
                                <option value="ee">Estonia</option>
                                <option value="et">Ethiopia</option>
                                <option value="fk">Falkland Islands (Malvinas)</option>
                                <option value="fo">Faroe Islands</option>
                                <option value="fj">Fiji</option>
                                <option value="fi">Finland</option>
                                <option value="fr">France</option>
                                <option value="gf">French Guiana</option>
                                <option value="pf">French Polynesia</option>
                                <option value="tf">French Southern Territories</option>
                                <option value="ga">Gabon</option>
                                <option value="gm">Gambia</option>
                                <option value="ge">Georgia</option>
                                <option value="de">Germany</option>
                                <option value="gh">Ghana</option>
                                <option value="gi">Gibraltar</option>
                                <option value="gr">Greece</option>
                                <option value="gl">Greenland</option>
                                <option value="gd">Grenada</option>
                                <option value="gp">Guadeloupe</option>
                                <option value="gu">Guam</option>
                                <option value="gt">Guatemala</option>
                                <option value="gg">Guernsey</option>
                                <option value="gn">Guinea</option>
                                <option value="gw">Guinea-bissau</option>
                                <option value="gy">Guyana</option>
                                <option value="ht">Haiti</option>
                                <option value="hm">Heard Island and Mcdonald Islands</option>
                                <option value="va">Holy See (Vatican City State)</option>
                                <option value="hn">Honduras</option>
                                <option value="hk">Hong Kong</option>
                                <option value="hu">Hungary</option>
                                <option value="is">Iceland</option>
                                <option value="in">India</option>
                                <option value="id">Indonesia</option>
                                <option value="ir">Iran, Islamic Republic of</option>
                                <option value="iq">Iraq</option>
                                <option value="ie">Ireland</option>
                                <option value="im">Isle of Man</option>
                                <option value="il">Israel</option>
                                <option value="it">Italy</option>
                                <option value="jm">Jamaica</option>
                                <option value="jp">Japan</option>
                                <option value="je">Jersey</option>
                                <option value="jo">Jordan</option>
                                <option value="kz">Kazakhstan</option>
                                <option value="ke">Kenya</option>
                                <option value="ki">Kiribati</option>
                                <option value="kp">Korea, Democratic People's Republic of</option>
                                <option value="kr">Korea, Republic of</option>
                                <option value="kw">Kuwait</option>
                                <option value="kg">Kyrgyzstan</option>
                                <option value="la">Lao People's Democratic Republic</option>
                                <option value="lv">Latvia</option>
                                <option value="lb">Lebanon</option>
                                <option value="ls">Lesotho</option>
                                <option value="lr">Liberia</option>
                                <option value="ly">Libyan Arab Jamahiriya</option>
                                <option value="li">Liechtenstein</option>
                                <option value="lt">Lithuania</option>
                                <option value="lu">Luxembourg</option>
                                <option value="mo">Macao</option>
                                <option value="mk">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="mg">Madagascar</option>
                                <option value="mw">Malawi</option>
                                <option value="my">Malaysia</option>
                                <option value="mv">Maldives</option>
                                <option value="ml">Mali</option>
                                <option value="mt">Malta</option>
                                <option value="mh">Marshall Islands</option>
                                <option value="mq">Martinique</option>
                                <option value="mr">Mauritania</option>
                                <option value="mu">Mauritius</option>
                                <option value="yt">Mayotte</option>
                                <option value="mx">Mexico</option>
                                <option value="fm">Micronesia, Federated States of</option>
                                <option value="md">Moldova, Republic of</option>
                                <option value="mc">Monaco</option>
                                <option value="mn">Mongolia</option>
                                <option value="me">Montenegro</option>
                                <option value="ms">Montserrat</option>
                                <option value="ma">Morocco</option>
                                <option value="mz">Mozambique</option>
                                <option value="mm">Myanmar</option>
                                <option value="na">Namibia</option>
                                <option value="nr">Nauru</option>
                                <option value="np">Nepal</option>
                                <option value="nl">Netherlands</option>
                                <option value="an">Netherlands Antilles</option>
                                <option value="nc">New Caledonia</option>
                                <option value="nz">New Zealand</option>
                                <option value="ni">Nicaragua</option>
                                <option value="ne">Niger</option>
                                <option value="ng">Nigeria</option>
                                <option value="nu">Niue</option>
                                <option value="nf">Norfolk Island</option>
                                <option value="mp">Northern Mariana Islands</option>
                                <option value="no">Norway</option>
                                <option value="om">Oman</option>
                                <option value="pk">Pakistan</option>
                                <option value="pw">Palau</option>
                                <option value="ps">Palestinian Territory, Occupied</option>
                                <option value="pa">Panama</option>
                                <option value="pg">Papua New Guinea</option>
                                <option value="py">Paraguay</option>
                                <option value="pe">Peru</option>
                                <option value="ph">Philippines</option>
                                <option value="pn">Pitcairn</option>
                                <option value="pl">Poland</option>
                                <option value="pt">Portugal</option>
                                <option value="pr">Puerto Rico</option>
                                <option value="qa">Qatar</option>
                                <option value="re">Reunion</option>
                                <option value="ro">Romania</option>
                                <option value="ru">Russian Federation</option>
                                <option value="rw">Rwanda</option>
                                <option value="sh">Saint Helena</option>
                                <option value="kn">Saint Kitts and Nevis</option>
                                <option value="lc">Saint Lucia</option>
                                <option value="pm">Saint Pierre and Miquelon</option>
                                <option value="vc">Saint Vincent and The Grenadines</option>
                                <option value="ws">Samoa</option>
                                <option value="sm">San Marino</option>
                                <option value="st">Sao Tome and Principe</option>
                                <option value="sa">Saudi Arabia</option>
                                <option value="sn">Senegal</option>
                                <option value="rs">Serbia</option>
                                <option value="sc">Seychelles</option>
                                <option value="sl">Sierra Leone</option>
                                <option value="sg">Singapore</option>
                                <option value="sk">Slovakia</option>
                                <option value="si">Slovenia</option>
                                <option value="sb">Solomon Islands</option>
                                <option value="so">Somalia</option>
                                <option value="za">South Africa</option>
                                <option value="gs">South Georgia and The South Sandwich Islands</option>
                                <option value="es">Spain</option>
                                <option value="lk">Sri Lanka</option>
                                <option value="sd">Sudan</option>
                                <option value="sr">Suriname</option>
                                <option value="sj">Svalbard and Jan Mayen</option>
                                <option value="sz">Swaziland</option>
                                <option value="se">Sweden</option>
                                <option value="ch">Switzerland</option>
                                <option value="sy">Syrian Arab Republic</option>
                                <option value="tw">Taiwan, Province of China</option>
                                <option value="tj">Tajikistan</option>
                                <option value="tz">Tanzania, United Republic of</option>
                                <option value="th">Thailand</option>
                                <option value="tl">Timor-leste</option>
                                <option value="tg">Togo</option>
                                <option value="tk">Tokelau</option>
                                <option value="to">Tonga</option>
                                <option value="tt">Trinidad and Tobago</option>
                                <option value="tn">Tunisia</option>
                                <option value="tr">Turkey</option>
                                <option value="tm">Turkmenistan</option>
                                <option value="tc">Turks and Caicos Islands</option>
                                <option value="tv">Tuvalu</option>
                                <option value="ug">Uganda</option>
                                <option value="ua">Ukraine</option>
                                <option value="ae">United Arab Emirates</option>
                                <option value="gb">United Kingdom</option>
                                <option value="us">United States</option>
                                <option value="um">United States Minor Outlying Islands</option>
                                <option value="uy">Uruguay</option>
                                <option value="uz">Uzbekistan</option>
                                <option value="vu">Vanuatu</option>
                                <option value="ve">Venezuela</option>
                                <option value="vn">Viet Nam</option>
                                <option value="vg">Virgin Islands, British</option>
                                <option value="vi">Virgin Islands, U.S.</option>
                                <option value="wf">Wallis and Futuna</option>
                                <option value="eh">Western Sahara</option>
                                <option value="ye">Yemen</option>
                                <option value="zm">Zambia</option>
                                <option value="zw">Zimbabwe</option>
                            </div>
                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="test" name="state"></input>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="radio" name="gender" value="male">male
                                <input id="gender" type="radio" name="gender" value="female">female
                                <input id="gender" type="radio" name="gender" value="not">Rather not say
                            </div>
                        </div>
</form>
<div id="login">
<input type="submit" class="btn btn-primary"></input>
<input type="reset" class="btn btn-dark"></input>
</div>

</form>
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