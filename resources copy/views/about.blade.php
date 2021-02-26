@extends('layouts.app')

@section('title')
  <title>Detect-app</title>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/enregistrement.css')}}">
@endsection

@section('content')
  <section class="banner-section banner-back">
    <div class="section-title">
        <h1>A Propos</h1>
    </div>
  </section>

  <!-- main section -->
  <div class="main-content">
    <section class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="text-center">
              <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt culpa vel quidem officia iusto est mollitia assumenda minus enim eveniet rem necessitatibus harum voluptatum voluptas, cupiditate architecto odit, amet at.</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="">
              <img src="{{asset('images/Classroom-2048x1365.jpg')}}" class="img-fluid about-img" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- count section -->
    <section class="count-section">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="count-box">
              <img src="{{asset('images/school.svg')}}" class="img-fluid count-icon" alt="">
            </div>
            <h2 class="text-center">99,88 <br> Ecole inscrits</h2>
          </div>
          <div class="col-4">
            <div class="count-box">
              <img src="{{asset('images/value.svg')}}" class="img-fluid count-icon" alt="">
            </div>
            <h2 class="text-center">99,88 <br> Total candidat</h2>
          </div>
          <div class="col-4">
            <div class="count-box">
                <img src="{{asset('images/visits.svg')}}" class="img-fluid count-icon" alt="">
            </div>
            <h2 class="text-center">99,88 <br> visiteurs</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- count section end -->

    <!--  -->
    <section>
      <div class="container">
        <div class="text-bg">
          <h1>"L'éducation de demain, ancrée dans la tradition vous invite"</h1>
          <h4>Notre objectif est de fournir à votre enfant un environnement sûr et heureux, où il pourra être lui-même et s'épanouir; tout en acquérant les bases pédagogiques nécessaires pour atteindre</h4>
        </div>
      </div>
    </section>
    <!--  -->
  </div>
@endsection

@section('scripts')
  <script src="{{asset('js/main.js')}}"></script>
@endsection