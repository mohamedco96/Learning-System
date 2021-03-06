<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="منصه تعليمية">
    <meta name="keyword" content="interactive">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="cursors png">

    <!-- ======= Header ======= -->
    <header id="header" style="background-color: #d2f0fb">
        <div class="container d-flex">

            <nav class="nav-menu float-right d-none d-lg-block" >
                <ul>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                            </li>
                        @endif
{{-- 
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                       document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest

                    <li><a href="#contact">تواصل معنا</a></li>
                    <li><a href="./module">الموديولات</a></li>
                    @auth
                    <li><a href="./info">تعليمات البيئة</a></li>
                    <li><a href="./about">عن البيئة</a></li>
                    @endauth
                    <li class="active"><a href="./home">الرئيسية</a></li>
                </ul>
            </nav>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('img/slide.jpg');">
                        <div class="carousel-container">
                            {{-- <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Mamba</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div> --}}
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('img/slide2.jpg');">
                        <div class="carousel-container">
                            {{-- <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div> --}}
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('img/slide3.jpg');">
                        <div class="carousel-container">
                            {{-- <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div> --}}
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div class="col video-box">
                        @guest
                            <form method="POST" action="{{ route('login') }}" dir="rtl" style="margin-top: 20px">
                                @csrf
                                <h1>تسجيل الدخول</h1>
                                <div class="form-group" style="margin-bottom: 20px">
                                    <span class="input-group-addon"><i class="icon-user"></i>
                                    </span>
                                    <!-- <input type="text" class="form-control en" placeholder="نام کاربری یا ایمیل"> -->
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="البريد الإلكتروني ">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group" style="margin-bottom: 20px">
                                    <span class="input-group-addon"><i class="icon-lock"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="كلمة المرور">
        
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group" style="margin-bottom: 20px">
                                    <div class="input-group m-b-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                            <label class="form-check-label" for="remember">
                                                {{ __('تذكرني') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                {{-- <button type="submit"
                                    class="btn btn-primary">Submit</button> --}}
                                    <p style="text-align: center">
                                        <button type="submit" class="btn btn-block btn-success">
                                            {{ __('تسجيل دخول') }}
                                        </button>
                                    </p>

                            </form>
                        @endguest

                        @auth
                        
                            <div style="margin-top: 20px">
                                <p style="text-align: center;"><span
                                    style="font-family: 'Open Sans'; font-size: 22px;">
                                    أهلا بك عزيزي <strong>{{ Auth::user()->name }} </strong> 
                                     في بيئة التعلم الافتراضية  لتنمية مهارات إنتاج الفيديو الرقمي التفاعلي بإستخدام 
                                    برنامج Cartoon Animator 4 &amp; Camtasia Studio<br></span></p>

                                    <p style="text-align: center">
                                        <a href="./intro1" class="btn btn-primary" style="margin-bottom: 30px"> مقياس مستوى الدافعية</a><br>
                                        <a href="./intro2" class="btn btn-primary">الإختبار القبلي</a>
                                    </p>
                            </div>
                        @endauth
                    </div>

                </div>

            </div>
        </section><!-- End About Us Section -->


        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>تواصل معنا</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>دمياط- دمياط الجديدة -جامعة دمياط-كلية التربية</p>
                        </div>
                    </div>

                    <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>dina.gwida@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-box ">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+2 01024715454<br>+2 01141921056</p>
                        </div>
                    </div>

                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="contact" method="get">
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form4Example1" class="form-control" name="name"
                                    placeholder="الإسم" required />
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form4Example2" class="form-control" name="email"
                                    placeholder="البريد الإلكتروني" required />
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form4Example3" rows="4" name="message"
                                    placeholder="رسالتك" required></textarea>
                            </div>

                            <!-- Submit button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block mb-4">ارسل</button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->

    {{-- <div class="fixed-bottom"
        style="background-color: #767c7c; width: 200px;height: 250px;float: left;border-radius: 35px 35px 0px 0px; position: sticky; text-align: center; color: ivory">
        <p>Support</p>
    </div> --}}

    {{-- Manual Support --}}

    {{-- <div id="manual">
        <video width="230" height="180" controls>
            <source src="./video/01.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div> --}}

    {{-- Automatic Support --}}

    {{-- <div id="automatic">
        <button type="button" class="btn btn-primary support" data-toggle="modal" data-target="#exampleModal">
            إضغط هنا للدعم
        </button>
    </div> --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Automatic Support</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video width="230" height="180" controls>
                        <source src="./video/01.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    {{-- <footer id="footer" class="footer navbar-fixed-bottom">
        <div class="container">
            <div class="copyright">
                جميع الحقوق محفوظة
            </div>
        </div>
    </footer> --}}
    <!-- End Footer -->


    {{-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    --}}

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
