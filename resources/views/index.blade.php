@extends('layouts.app')

@section('title')
    <title>Detect-app</title>
@endsection

@section('content')
    <header>
        <div class="container-fluid">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('images/school.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="slog text-left">
                            <h1 class="">Pour une education <br> conforme sans fraude</h1>
                            <a href="#" class="primary-btn secondary-btn">S'inscrire</a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/Classroom-2048x1365.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="slog text-left">
                            <h1 class="">Pour une education <br> conforme sans fraude</h1>
                            <a href="#" class="primary-btn secondary-btn">S'inscrire</a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/teacherstudent-video-chat-2048x1365.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="slog text-left">
                            <h1 class="">Pour une education <br> conforme sans fraude</h1>
                            <a href="#" class="primary-btn secondary-btn">S'inscrire</a>
                        </div>
                    </div>
                  </div>
                </div>
                
              </div>
        </div>
    </header>

    <!-- header end -->

    <!-- main section -->
    <div class="main-content">
        <section class="descip-box">
            <div class="container-fluid">
                <div class="description">
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius itaque cupiditate similique, nihil saepe non impedit eligendi eaque deserunt aspernatur unde blanditiis quasi. Ullam, saepe alias. Perspiciatis vel ratione odio.</p>
                </div>
            </div>
        </section>
        <!--   -->
        <section class="work-section">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="card my-card">
                            <img src="{{asset('images/work.svg')}}" class="work-illustration" alt="">
                            <h4 class="my-card_title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card my-card">
                            <img src="{{asset('images/membership.svg')}}"  class="work-illustration" alt="">
                            <h4 class="my-card_title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card my-card">
                            <img src="{{asset('images/work.svg')}}" class="work-illustration" alt="">
                            <h4 class="my-card_title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card my-card">
                            <img src="{{asset('images/membership.svg')}}"  class="work-illustration" alt="">
                            <h4 class="my-card_title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- news section -->
        <section class="work-section bg-img">
            <div class="container-fluid">
                <h1 class="section-title">Actualité</h1>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6 mb-4">
                                <div class="date-box">
                                    <h1>FEV <span class="number-date"> 03</span></h1>
                                    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, ipsa? Nemo laborum </h2>
                                    <a href="#" class="actu-link">plus + </a>
                               </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="card b-none">
                                    <img src="{{asset('images/school.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="date-box">
                                    <h1>FEV <span class="number-date"> 03</span></h1>
                                    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, ipsa? Nemo laborum </h2>
                                    <a href="#" class="actu-link">plus + </a>
                               </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="card b-none">
                                    <img src="{{asset('images/school.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="row">
                            <div class="col-6 mb-4">
                                <div class="card b-none">
                                    <img src="{{asset('images/school.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="date-box">
                                    <h1><span class="number-date"> 23</span> Sep</h1>
                                    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, ipsa? Nemo laborum </h2>
                                    <a href="#" class="actu-link">plus + </a>
                               </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="card b-none">
                                    <img src="{{asset('images/school.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="date-box">
                                    <h1><span class="number-date"> 23</span> Sep</h1>
                                    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, ipsa? Nemo laborum </h2>
                                    <a href="#" class="actu-link">plus + </a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news section end-->

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