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
                    <img src="{{asset('images/img1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="slog text-left">
                            <h1 class="">pour la restauration de  <br> l’honorabilité de notre education</h1>
                            <a href="{{url('/school/inscription')}}" class="primary-btn secondary-btn">S'inscrire</a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/img3.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="slog text-left">
                            <h1 class="">Nous offrons, <br> expertise et compétences</h1>
                            <a href="{{url('/school/inscription')}}" class="primary-btn secondary-btn">S'inscrire</a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/img6.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="slog text-left">
                            <h1 class=""></h1>
                            <a href="{{url('/school/inscription')}}" class="primary-btn secondary-btn">S'inscrire</a>
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
                    <P>Nous sommes une équipe oeuvrant pour une ecole sans fraude, permettant d'avoir
                         des diplomés a la hauteur du dit diplome. Pour une des resultats scolaire sans tâches inscrivez votre école. <br>
                    La philosophie de notre structure : discrétion au service de l’efficacité.</p>
                </div>
            </div>
        </section>
        <!--   -->
        <section class="work-section">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="card my-card">
                            <img src="{{asset('images/browser.svg')}}" class="work-illustration" alt="">
                            <h4 class="my-card_title">Votre souscription vous donne droit à une plateforme simple d'utilisation, rapide et efficace.</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card my-card">
                            <img src="{{asset('images/statistics.svg')}}"  class="work-illustration" alt="">
                            <h4 class="my-card_title">Vous disposez de vos données en temps réel, même celles des années scolaires antérieures.</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card my-card">
                            <img src="{{asset('images/security.svg')}}" class="work-illustration" alt="">
                            <h4 class="my-card_title">Securisez les differents examens scolaires dans votre etablissements</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card my-card">
                            <img src="{{asset('images/communicate.svg')}}"  class="work-illustration" alt="">
                            <h4 class="my-card_title">Pour toutes préoccupations, vous pouvez contacter le service client.</h4>
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
                                    <h2>La ministre de l’Education nationale, de l’Enseignement technique et de la Formation professionnelle, Kandia Camara, a remis...</h2>
                                    <a href="#" class="actu-link">plus + </a>
                               </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="card b-none">
                                    <img src="{{asset('images/event1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="date-box">
                                    <h1>FEV <span class="number-date"> 03</span></h1>
                                    <h2>Les formations des enseignants du projet Ecoles Numériques d’Excellence Africaine (ENEA) se sont achevées au CNMS à Cocody... </h2>
                                    <a href="#" class="actu-link">plus + </a>
                               </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="card b-none">
                                    <img src="{{asset('images/event2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="row">
                            <div class="col-6 mb-4">
                                <div class="card b-none">
                                    <img src="{{asset('images/event3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="date-box">
                                    <h1><span class="number-date"> 23</span> Sep</h1>
                                    <h2>La Journée internationale de la jeunesse, célébrée le 12 août, a été l’occasion de nous intéresser une fois de plus aux jeunes africains... </h2>
                                    <a href="#" class="actu-link">plus + </a>
                               </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="card b-none">
                                    <img src="{{asset('images/img5.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="date-box">
                                    <h1><span class="number-date"> 23</span> Sep</h1>
                                    <h2>La ministre de l’Education nationale, de l’Enseignement technique et de la Formation technique, Kandia Camara, a supervisé...</h2>
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
                    <h4>Notre objectif est de fournir aux etablissements des resultats concrets à l'image des compétances des élèves.</h4>
                </div>
            </div>
        </section>
        <!--  -->
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/main.js')}}"></script>
@endsection