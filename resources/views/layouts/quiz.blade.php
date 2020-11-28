<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link rel="stylesheet" href="style.css"> --}}


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
        integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
    <div id="cieKut" style="z-index:100;position:fixed"></div>
    <div id="sceKut" style="display:inline"></div>
    <div id="sdeKut" style="display:none"></div>
    <script type="text/javascript">
        var seeKut = document.createElement("script");
        seeKut.type = "text/javascript";
        var seeKuts = (location.protocol.indexOf("https") == 0 ? "https" : "http") +
            "://image.providesupport.com/js/1kclfucqv1gr50h47s6oimrod4/safe-standard.js?ps_h=eKut&ps_t=" + new Date()
            .getTime();
        setTimeout("seeKut.src=seeKuts;document.getElementById('sdeKut').appendChild(seeKut)", 1)

    </script>
    <noscript>
        <div style="display:inline"><a href="https://vm.providesupport.com/1kclfucqv1gr50h47s6oimrod4">Customer
                Support</a></div>
    </noscript>
    <!-- END ProvideSupport.com Graphics Chat Button Code -->
</head>
<style>
    #container {
        position: relative;
    }

    #img2 {
        position: absolute;
        left: 100px;
        top: 280px;
        width: 400px
    }

    #card {
        position: absolute;
        left: 300px;
        top: 230px;
    }

    #heading {
        text-align: center;
        position: absolute;
        right: 50px;
        top: 50px;
    }

</style>

<body>
    {{-- Nav Bar --}}
    <div class="" style="">
        <nav class="navbar navbar-light navbar-expand-lg" dir="rtl" style="background-color: #d2f0fb; ">
            {{-- <a class="navbar-brand" href="#" style="color: #5d82b4">Navbar</a>
            --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./" style="color: #5d82b4">الرئيسية <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about" style="color: #5d82b4">عن البحث</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../info" style="color: #5d82b4">تعليمات البيئة</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                <!-- Add font awesome icons -->
                <a href="#" class="fa fa-facebook" style="text-decoration: none; margin-right: 5px"></a>
                <a href="#" class="fa fa-twitter" style="text-decoration: none; margin-right: 5px"></a>
                <a href="#" class="fa fa-whatsapp" style="text-decoration: none; margin-right: 5px"></a>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest

            </div>
        </nav>
        
    </div>
    {{-- End Nav --}}

    <!-- Main content -->
    <div class="container">
        @yield('content')
    </div>
    <!-- /.content -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"
        integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous">
    </script>
</body>

<script src="question.js"></script>
</html>
