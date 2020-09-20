<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
      

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   <!-- App CSS -->
        <!-- <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" /> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" /> -->
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="{{asset('assets/js/aos-master/dist/aos.css')}}">



        <!-- <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" /> -->

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>
            html{
              scroll-behavior:smooth;
            }
            .owl-controls{
                z-index:2;
                position:absolute;
                width:100%;
                bottom:20px;
                text-align:center;
            }
            .owl-pagination .owl-page{
                display:inline-block;
                width:8px;
                height:8px;
                margin:0 10px;
                border:2px solid #f0b697;
                border-radius:8px;
            }
            .owl-pagination .owl-page.active{
                background:#f0b697;
            }

            .demo a {
              position: absolute;
              bottom: 20px;
              left: 50%;
              z-index: 2;
              display: inline-block;
              -webkit-transform: translate(0, -50%);
              transform: translate(0, -10%);
              color: blue;
              font : normal 400 20px/1 'Josefin Sans', sans-serif;
              letter-spacing: .1em;
              text-decoration: none;
              transition: opacity .3s;
            }
            .demo a:hover {
              opacity: .5;
            }

            #section07 a {
              padding-top: 80px;
            }
            #section07 a span {
              position: absolute;
              top: 0;
              left: 50%;
              width: 20px;
              height: 20px;
              margin-left: -12px;
              border-left: 1px solid #111;
              border-bottom: 1px solid blue;
              -webkit-transform: rotate(-45deg);
              transform: rotate(-45deg);
              -webkit-animation: sdb07 2s infinite;
              animation: sdb07 2s infinite;
              opacity: 0;
              box-sizing: border-box;
            }
            #section07 a span:nth-of-type(1) {
              -webkit-animation-delay: 0s;
              animation-delay: 0s;
            }
            #section07 a span:nth-of-type(2) {
              top: 16px;
              -webkit-animation-delay: .15s;
              animation-delay: .15s;
            }
            #section07 a span:nth-of-type(3) {
              top: 32px;
              -webkit-animation-delay: .3s;
              animation-delay: .3s;
            }
            @-webkit-keyframes sdb07 {
              0% {
                opacity: 0;
              }
              50% {
                opacity: 1;
              }
              100% {
                opacity: 0;
              }
            }
            @keyframes sdb07 {
              0% {
                opacity: 0;
              }
              50% {
                opacity: 1;
              }
              100% {
                opacity: 0;
              }
            }

            @media screen and (max-width: 992px) {
              .banner-object{
                display: none;
              }
              .banner-text{
                width: 100% !important;
              }
              .card{
                border:0px
              }
            }


        </style>
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    </head>
    <body>

<div class="jumbotron jumbotron-fluid p-0 bg-white position-relative" >
    <nav class="navbar navbar-expand-lg navbar-dark  position-absolute w-100" style="top:0; background:none; z-index:1">
      <a class="navbar-brand text-dark font-weight-bold" href="#">BATERLIST</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active px-3">
            <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link" href="{{route('account.login')}}">Login</a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link" href="{{route('account.register')}}">Register</a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link active" href="#" tabindex="-1">About Us</a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link active" href="#" tabindex="-1">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="d-flex" style="height:50vh">
        <div class="banner-text" style="margin-top: 20vh; width:50vw">
          <div class="owl-carousel owl-theme">
            <div class="item p-4 text-center">
              <h1 class="display-4">Barter System</h1>
              <h3 class="lead">Trading</h3>
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            <div class="item p-4">
              <h1 class="display-4">Hello, world!</h1>
              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            <div class="item p-4">
              <h1 class="display-4">Hello, world!</h1>
              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            <div class="item p-4">
              <h1 class="display-4">Hello, world!</h1>
              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
         
          </div>
          <div class="owl-dots"></div>
        </div>
        
        <div class="banner-object" style="width:55vw">
          <div class="position-relative">
              <img src="{{asset('images/Group 1.png')}}" class="w-100 h-100" alt="notthing">
              <div class="position-absolute" style="top:10vh">
                <img src="{{asset('images/walking-man.gif')}}" class="w-100 h-100" alt="notthing">
              </div>
          </div>
        </div>
      </div>  
</div>

<section id="section07" class="demo">
  <a href="#main"><span></span><span></span></a>
</section>
<main id="main">
    <div class="container mb-5" style="margin-top:50vh">
        <div class="row" >
        <div class="col-sm-4" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
              <div class="card text-center pt-4">
                <img class="card-img-top mx-auto" src="{{asset('images/wishlist.png')}}" style="width:100px" alt="add-item">
                <div class="card-body">
                  <h4 class="card-title">Save items to wishlist</h4>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-4" data-aos="fade-up" data-aos-delay="60" data-aos-duration="800">
              <div class="card text-center pt-4 ">
                <img class="card-img-top mx-auto" src="{{asset('images/buy.png')}}" style="width:100px" alt="add-item">
                <div class="card-body">
                  <h4 class="card-title">Add items for exchange</h4>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-4" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800">
              <div class="card text-center pt-4 ">
                <img class="mx-auto" src="{{asset('images/exchange.png')}}" style="width:100px" alt="add-item">
                <div class="card-body">
                  <h4 class="card-title">Exchange items</h4>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</main>
        <!-- <div class="flex-center position-ref full-height" > -->
            @if (Route::has('login'))
                <!-- <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div> -->
            @endif

            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> -->
        </div>
          

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="{{asset('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

<script src="{{asset('assets/js/aos-master/dist/aos.js')}}"></script>
          <script>
            AOS.init();
          </script>

        <!--Morris Chart-->
<!-- <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script> -->

        <!-- Dashboard init -->
        <!-- <script src="{{asset('assets/pages/jquery.dashboard.js')}}"></script> -->

        <!-- App js -->
        <!-- <script src="{{asset('js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script> -->
        <script src="{{asset('js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
        <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 1,
                loop: true,
                margin: 50,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsiveClass:true,
                smartSpeed: 1000,
                dots: true
              });
              
            })

            $(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
          </script>
          

    </body>
</html>
