<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
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
     <link href="dest/style1.css" rel="stylesheet">

 </head>

 <body class="navbar-fixed sidebar-nav fixed-nav">
     <header class="navbar">
         <div class="container-fluid">
             <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
             {{-- <a class="navbar-brand" href="#"></a> --}}

             <ul class="nav navbar-nav hidden-md-down" style="margin-right: 50px">
                 <li class="nav-item">
                     <a class="nav-link" href="/" style="margin-left: 15px; margin-right: 5px"> الرئيسية </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="../about" style="margin-left: 15px; margin-right: 15px"> عن البحث </a>
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
                             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                         </li>
                     @endif

                     @if (Route::has('register'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                         </li>
                     @endif
                 @else
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
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

     <!-- Main content -->
     <main class="main">
         @yield('content')
     </main>


     <footer class="footer" style="text-align: center">
         جميع الحقوق محفوظة
     </footer>
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



 </body>

 </html>
