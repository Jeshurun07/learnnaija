<header id="header" class="fixed-top ">
    <div id="app">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.html">LearnNaija</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
    </div>
</header>
<section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
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