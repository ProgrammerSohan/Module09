<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{'assets/css/style.css'}}" />
  </head>
  <body>
    <main>
      <header id="header">
        <div class="overlay overlay-lg">
          <img src="{{asset('assets/img/shapes/square.png')}}" class="shape square" alt="" />
          <img src="{{asset('assets/img/shapes/circle.png')}}" class="shape circle" alt="" />
          <img
            src="{{asset('assets/img/shapes/half-circle.png')}}"
            class="shape half-circle1"
            alt=""
          />
          <img
            src="{{asset('assets/img/shapes/half-circle.png')}}"
            class="shape half-circle2"
            alt=""
          />
          <img src="{{asset('assets/img/shapes/x.png')}}" class="shape xshape" alt="" />
          <img src="{{asset('assets/img/shapes/wave.png')}}" class="shape wave wave1" alt="" />
          <img src="{{asset('assets/img/shapes/wave.png')}}" class="shape wave wave2" alt="" />
          <img src="{{asset('assets/img/shapes/triangle.png')}}" class="shape triangle" alt="" />
          <img src="{{asset('assets/img/shapes/letters.png')}}" class="letters" alt="" />
          <img src="{{asset('assets/img/shapes/points1.png')}}" class="points points1" alt="" />
        </div>

        @include('Components.header')

       @yield('content')
      </header>

      
    </main>
    @include('Components.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
  </body>
</html>
