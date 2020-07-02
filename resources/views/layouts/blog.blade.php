<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>
        @yield('title')
    </title>

    <!-- Styles -->
  <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->

  <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
        <a class="navbar-brand" href="{{route('welcome')}}" style="font-size: 40px;";>
          {{-- <img class="logo-dark" src="{{asset('img/logo-dark.png')}}" alt="logo"> --}}
          <img src="{{asset('img/apple-icon-precomposed.png')}}" width="100px" height="100px" style="border-radius: 50px;" alt="logo">
          <span style="color: #AA2930">Lokesh</span> Reddy
          </a>
        </div>
        
        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>
        </section>

      {{-- <a class="btn btn-sm btn-round btn-success" href="{{route('login')}}">Login</a> --}}

      </div>
    </nav><!-- /.navbar -->


   @yield('header')

   @yield('content')


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-6 col-lg-3">
            <a href="/"><img src="{{asset('img/apple-icon-precomposed.png')}}" width="50px" height="50px" alt="logo"></a>
          </div>
          <div class="col-6 col-lg-3 text-right order-lg-last">
            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-github"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-github" href="https://www.instagram.com/thethemeio/"><i class="fa fa-youtube"></i></a>
              <a class="social-youtube" href="https://dribbble.com/thethemeio"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
<script src="{{asset('js/page.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5efa05087571d378"></script>

  </body>
</html>
