@extends('Layouts.app')

@section('content')

<section class="portfolio section" id="portfolio">
    <div class="background-bg">
      <div class="overlay overlay-sm">
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
        <img src="{{asset('assets/img/shapes/square.png')}}" class="shape square" alt="" />
        <img src="{{asset('assets/img/shapes/wave.png')}}" class="shape wave" alt="" />
        <img src="./img/shapes/circle.png" class="shape circle" alt="" />
        <img
          src="{{asset('assets/img/shapes/triangle.png')}}"
          class="shape triangle"
          alt=""
        />
        <img src="{{asset('assets/img/shapes/x.png')}}" class="shape xshape" alt="" />
      </div>
    </div>

    <div class="container">
      <div class="section-header">
        <h3 class="title" data-title="My works">Portfolio</h3>
      </div>

      <div class="section-body">
        <div class="filter">
          <button class="filter-btn active" data-filter="*">All</button>
          <button class="filter-btn" data-filter=".ui">UI/UX</button>
          <button class="filter-btn" data-filter=".webdev">Web Dev</button>
          <button class="filter-btn" data-filter=".appdev">
            Mobile App
          </button>
          <button class="filter-btn" data-filter=".logo-design">
            Logo Design
          </button>
        </div>

        <div class="grid">
          <div class="grid-item logo-design">
            <div class="gallery-image">
              <img src="{{asset('assets/img/portfolio/port1.jpg')}}" alt="" />
              <div class="img-overlay">
                <div class="plus"></div>
                <div class="img-description">
                  <h3>Logo Design</h3>
                  <h5>View Demo</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item webdev">
            <div class="gallery-image">
              <img src="{{asset('assets/img/portfolio/port2.png')}}" alt="" />
              <div class="img-overlay">
                <div class="plus"></div>
                <div class="img-description">
                  <h3>Web Development</h3>
                  <h5>View Demo</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item ui webdev">
            <div class="gallery-image">
              <img src="{{asset('assets/img/portfolio/port3.png')}}" alt="" />
              <div class="img-overlay">
                <div class="plus"></div>
                <div class="img-description">
                  <h3>Web Design</h3>
                  <h5>View Demo</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item ui">
            <div class="gallery-image">
              <img src="{{asset('assets/img/portfolio/port4.png')}}" alt="" />
              <div class="img-overlay">
                <div class="plus"></div>
                <div class="img-description">
                  <h3>UI / UX Design</h3>
                  <h5>View Demo</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item logo-design">
            <div class="gallery-image">
              <img src="{{asset('assets/img/portfolio/port5.jpg')}}" alt="" />
              <div class="img-overlay">
                <div class="plus"></div>
                <div class="img-description">
                  <h3>Logo Design</h3>
                  <h5>View Demo</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item appdev">
            <div class="gallery-image">
              <img src="{{asset('assets/img/portfolio/port6.jpg')}}" alt="" />
              <div class="img-overlay">
                <div class="plus"></div>
                <div class="img-description">
                  <h3>App Development</h3>
                  <h5>View Demo</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item logo-design">
            <div class="gallery-image">
              <img src="{{asset('assets/img/portfolio/port7.jpg')}}" alt="" />
              <div class="img-overlay">
                <div class="plus"></div>
                <div class="img-description">
                  <h3>Logo Design</h3>
                  <h5>View Demo</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item appdev ui">
            <div class="gallery-image">
              <img src="{{asset('assets/img/portfolio/port8.png')}}" alt="" />
              <div class="img-overlay">
                <div class="plus"></div>
                <div class="img-description">
                  <h3>App Development</h3>
                  <h5>View Demo</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item ui webdev">
            <div class="gallery-image">
              <img src="{{asset('assets/img/portfolio/port9.png')}}" alt="" />
              <div class="img-overlay">
                <div class="plus"></div>
                <div class="img-description">
                  <h3>Web Design</h3>
                  <h5>View Demo</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="more-folio">
          <a href="#" class="btn">More Folio</a>
        </div>
      </div>
    </div>
  </section>

@endsection