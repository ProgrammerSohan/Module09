@extends('Layouts.app')

@section('content')
<section class="services section" id="services">
    <div class="container">
      <div class="section-header">
        <h3 class="title" data-title="What I Do">Services</h3>
        <p class="text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
          vero?
        </p>
      </div>

      <div class="cards">
        <div class="card-wrap">
          <img
            src="{{asset('assets/img/shapes/points3.png')}}"
            class="points points1 points-sq"
            alt=""
          />
          <div class="card" data-card="UI/UX">
            <div class="card-content z-index">
              <img src="{{asset('assets/img/design-icon.png')}}" class="icon" alt="" />
              <h3 class="title-sm">Web Design</h3>
              <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
                est suscipit itaque?
              </p>
              <a href="#" class="btn small">Read more</a>
            </div>
          </div>
        </div>

        <div class="card-wrap">
          <div class="card" data-card="Code">
            <div class="card-content z-index">
              <img src="{{asset('assets/img/design-icon.png')}}" class="icon" alt="" />
              <h3 class="title-sm">Web Development</h3>
              <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dolores suscipit nobis dolore?
              </p>
              <a href="#" class="btn small">Read more</a>
            </div>
          </div>
        </div>

        <div class="card-wrap">
          <img
            src="{{asset('assets/img/design-icon.png')}}"
            class="points points2 points-sq"
            alt=""
          />
          <div class="card" data-card="App">
            <div class="card-content z-index">
              <img src="./img/app-icon.png" class="icon" alt="" />
              <h3 class="title-sm">App Development</h3>
              <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptatum hic veniam nihil.
              </p>
              <a href="#" class="btn small">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection