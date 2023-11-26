@extends('Layouts.app')

@section('content')
<div class="header-content">
    <div class="container grid-2">
      <div class="column-1">
        <h1 class="header-title">Sohanur Rahman Sohan</h1>
        <p class="text">
          Hello, I'm Sohanur Rahman, web design and developer. Lorem ipsum
          dolor sit amet consectetur adipisicing elit. Totam magni sit
          hic!
        </p>
        <a href="#" class="btn">Download CV</a>
      </div>

      <div class="column-2 image">
        <img
          src="{{asset('assets/img/shapes/points2.png')}}"
          class="points points2"
          alt=""
        />
        <img src="{{asset('assets/img/me.jpg')}}" class="img-element z-index" alt="" />
      </div>
    </div>
  </div>
@endsection