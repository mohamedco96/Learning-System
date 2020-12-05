<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
 
 <head>
     <meta charset="utf-8">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
     <meta name="author" content="Lukasz Holeczek">
     <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
     <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
     <title>{{ config('app.name', 'Laravel') }}</title>
     <!-- Icons -->
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="css/simple-line-icons.css" rel="stylesheet">
     <!-- Main styles for this application -->
     <link href="dest/style1.css" rel="stylesheet">
 
     <!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
     <div id="cieKut" style="z-index:100;position:fixed" dir="ltr"></div>
     <div id="sceKut" style="display:inline" dir="ltr"></div>
     <div id="sdeKut" style="display:none" dir="ltr"></div>
     <script type="text/javascript" dir="ltr">
         var seeKut = document.createElement("script");
         seeKut.type = "text/javascript";
         var seeKuts = (location.protocol.indexOf("https") == 0 ? "https" : "http") +
             "://image.providesupport.com/js/1kclfucqv1gr50h47s6oimrod4/safe-standard.js?ps_h=eKut&ps_t=" + new Date()
             .getTime();
         setTimeout("seeKut.src=seeKuts;document.getElementById('sdeKut').appendChild(seeKut)", 1)
 
     </script>
     <noscript dir="ltr">
         <div style="display:inline"><a href="https://vm.providesupport.com/1kclfucqv1gr50h47s6oimrod4">Customer
                 Support</a></div>
     </noscript>
     <!-- END ProvideSupport.com Graphics Chat Button Code -->
 
 </head>
 
 <body class="navbar-fixed sidebar-nav fixed-nav">
     <header class="navbar">
         <div class="container-fluid">
             <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
             <a class="navbar-brand" href="#"></a>
 
 
             <ul class="nav navbar-nav hidden-md-down">
            
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
 
             </ul>
             <ul class="nav navbar-nav pull-left hidden-md-down">
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
 
 
     <footer class="footer">
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
 
     <!-- Grunt watch plugin -->
     <script src="//localhost:35729/livereload.js"></script>
 
     <script src="question.js"></script>

 </body>
 
 </html>
 