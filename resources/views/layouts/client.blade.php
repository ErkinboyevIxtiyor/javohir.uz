<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset("client/assets/css/flaticon.css")}}" />
    <link rel="stylesheet" href="{{asset("client/assets/css/font-awesome-pro.css")}}" />
    <link rel="stylesheet" href="{{asset("client/assets/css/swiper-bundle.min.css")}}" />
    <link rel="stylesheet" href="{{asset("client/assets/css/magnific-popup.min.css")}}" />
    <link rel="stylesheet" href="{{asset("client/assets/css/main.css")}}" />
</head>
<body>

    {{-- <div id="preloader">
        <div class="loader_line"></div>
    </div> --}}

    <header class="position-absolute w-100 text-white">
        <div class="container">
          <div class="logo">
            <a href="#home">MaxDev<span class="text-primary">.Photo</span></a>
          </div>
          <ul class="menus">
            <li class="current"><a href="#services">Xizmatlar</a></li>
            <li><a href="#portfolio">Biz haqimizda</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Aloqa</a></li>
            <li><a href="{{route('login')}}">Kirish</a></li>
          </ul>
          <div class="social-icons">
            <a href="#"><i class="fa-sharp fa-regular fa-basketball"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
          </div>
          <div class="toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </header>

      @yield('content')

    <footer>
        <div class="container">
          <div class="social-icons">
            <a href="#"><i class="fa-sharp fa-regular fa-basketball"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
          </div>
          <div class="copy-right-text">
            Developed with love by <a href="#">Codeefly</a> © 2023
          </div>
        </div>
      </footer>
      <div class="progress">
        <svg
          class="progress-svg"
          width="100%"
          height="100%"
          viewBox="-1 -1 102 102"
        >
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
      </div>
      <div class="cursor"></div>



    <script src="{{asset("client/assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("client/assets/js/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("client/assets/js/imagesloaded-pkgd.min.js")}}"></script>
    <script src="{{asset("client/assets/js/isotope-pkgd.min.js")}}"></script>
    <script src="{{asset("client/assets/js/waypoints.min.js")}}"></script>
    <script src="{{asset("client/assets/js/counterup.min.js")}}"></script>
    <script src="{{asset("client/assets/js/magnific-popup.min.js")}}"></script>
    <script src="{{asset("client/assets/js/scroll-to-top.mini.js")}}"></script>
    <script src="{{asset("client/assets/js/jquery.nav.min.js")}}"></script>
    <script src="{{asset("client/assets/js/tilt.jquery.min.js")}}"></script>
    <script src="{{asset("client/assets/js/main.js")}}"></script>
</body>
</html>
