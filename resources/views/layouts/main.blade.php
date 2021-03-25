@php
$users = DB::table('users')
    ->where('id', Auth::user()->id)
    ->get();

foreach ($users as $user) {
    // echo $user->email;
}
@endphp

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="منصه تعليمية">
    <meta name="author" content="Dina Gwida">
    <meta name="keyword" content="interactive">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="dest/style.css" rel="stylesheet">

    <!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
    <div id="cieKut" style="z-index:100;position:fixed" dir="ltr"></div>
    <div id="sceKut" style="display:inline" dir="ltr"></div>
    <div id="sdeKut" style="display:none" dir="ltr"></div>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>

<body class="navbar-fixed sidebar-nav fixed-nav">
    <header class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            {{-- <a class="navbar-brand" href="#"></a> --}}


            <ul class="nav navbar-nav hidden-md-down" style="margin-right: 50px">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/" style="margin-left: 15px; margin-right: 5px"> الرئيسية </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../about" style="margin-left: 15px; margin-right: 15px"> عن البيئة </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../info" style="margin-left: 15px; margin-right: 15px"> تعليمات البيئة
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="../module" style="margin-left: 15px; margin-right: 15px"> الموديولات
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-left hidden-md-down" style="margin-left: 50px">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-item">
                    <a href="#" class="fa fa-facebook" style="text-decoration: none; margin-right: 5px"></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="fa fa-twitter" style="text-decoration: none; margin-right: 5px"></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="fa fa-whatsapp" style="text-decoration: none; margin-right: 5px"></a>
                </li>
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
            </ul>
        </div>
    </header>

    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav" style="margin-top: 25px">

                <li class="nav-title center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="../main1"><i
                            class="icon-user-follow"></i>الصفحة الرئيسية</a> --}}
                    <a class="nav-link" href="../module"><i class="icon-people"></i>الموديولات التعليمية </a>
                    <a class="nav-link" href="../plan"><i class="icon-people"></i>الخطة الزمنية </a>
                    {{-- <a class="nav-link" href="../library"><i
                            class="icon-people"></i>المكتبة الإئرائية</a> --}}
                    @if ($user->finish_module === '1')
                        <a class="nav-link" href="../exam"><i class="icon-people"></i>الاختبار البعدي</a>
                        <a class="nav-link" href="../alm8yas2"><i class="icon-people"></i>المقياس</a>
                    @endif
                </li>
            </ul>
        </nav>
    </div>


    <!-- Main content -->
    <main class="main">
        @yield('content')
    </main>




    {{-- <footer class="footer" style="text-align: center">
        جميع الحقوق محفوظة
    </footer> --}}

    <!-- Bootstrap and necessary plugins -->
    <script src="js/libs/jquery.min.js"></script>
    <script src="js/libs/tether.min.js"></script>
    <script src="js/libs/bootstrap.min.js"></script>
    <script src="js/libs/pace.min.js"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="js/libs/Chart.min.js"></script>

    <!-- CoreUI main scripts -->

    <script src="js/app.js"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>

    <!-- Grunt watch plugin -->
    <script src="//localhost:35729/livereload.js"></script>

    <script src="question.js"></script>

    <script>
        function text1() {
            document.getElementById("box1.1").style.display = "block";
            document.getElementById("box2.1").style.display = "none";
            document.getElementById("box3.1").style.display = "none";
        }

        function photo1() {
            document.getElementById("box1.1").style.display = "none";
            document.getElementById("box2.1").style.display = "block";
            document.getElementById("box3.1").style.display = "none";
        }

        function video1() {
            document.getElementById("box1.1").style.display = "none";
            document.getElementById("box2.1").style.display = "none";
            document.getElementById("box3.1").style.display = "block";
        }
        ///////////////////////////////////////////////////////////////////////////
        function text2() {
            document.getElementById("box1.2").style.display = "block";
            document.getElementById("box2.2").style.display = "none";
            document.getElementById("box3.2").style.display = "none";
        }

        function photo2() {
            document.getElementById("box1.2").style.display = "none";
            document.getElementById("box2.2").style.display = "block";
            document.getElementById("box3.2").style.display = "none";
        }

        function video2() {
            document.getElementById("box1.2").style.display = "none";
            document.getElementById("box2.2").style.display = "none";
            document.getElementById("box3.2").style.display = "block";
        }
        ///////////////////////////////////////////////////////////////////////////
        function text3() {
            document.getElementById("box1.3").style.display = "block";
            document.getElementById("box2.3").style.display = "none";
            document.getElementById("box3.3").style.display = "none";
        }

        function photo3() {
            document.getElementById("box1.3").style.display = "none";
            document.getElementById("box2.3").style.display = "block";
            document.getElementById("box3.3").style.display = "none";
        }

        function video3() {
            document.getElementById("box1.3").style.display = "none";
            document.getElementById("box2.3").style.display = "none";
            document.getElementById("box3.3").style.display = "block";
        }
        ///////////////////////////////////////////////////////////////////////////
        function text4() {
            document.getElementById("box1.4").style.display = "block";
            document.getElementById("box2.4").style.display = "none";
            document.getElementById("box3.4").style.display = "none";
        }

        function photo4() {
            document.getElementById("box1.4").style.display = "none";
            document.getElementById("box2.4").style.display = "block";
            document.getElementById("box3.4").style.display = "none";
        }

        function video4() {
            document.getElementById("box1.4").style.display = "none";
            document.getElementById("box2.4").style.display = "none";
            document.getElementById("box3.4").style.display = "block";
        }        ///////////////////////////////////////////////////////////////////////////
        function text5() {
            document.getElementById("box1.5").style.display = "block";
            document.getElementById("box2.5").style.display = "none";
            document.getElementById("box3.5").style.display = "none";
        }

        function photo5() {
            document.getElementById("box1.5").style.display = "none";
            document.getElementById("box2.5").style.display = "block";
            document.getElementById("box3.5").style.display = "none";
        }

        function video5() {
            document.getElementById("box1.5").style.display = "none";
            document.getElementById("box2.5").style.display = "none";
            document.getElementById("box3.5").style.display = "block";
        }        ///////////////////////////////////////////////////////////////////////////
        function text6() {
            document.getElementById("box1.6").style.display = "block";
            document.getElementById("box2.6").style.display = "none";
            document.getElementById("box3.6").style.display = "none";
        }

        function photo6() {
            document.getElementById("box1.6").style.display = "none";
            document.getElementById("box2.6").style.display = "block";
            document.getElementById("box3.6").style.display = "none";
        }

        function video6() {
            document.getElementById("box1.6").style.display = "none";
            document.getElementById("box2.6").style.display = "none";
            document.getElementById("box3.6").style.display = "block";
        }
    </script>
</body>

</html>
