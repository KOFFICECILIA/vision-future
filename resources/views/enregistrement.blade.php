@extends('layouts.app')

@section('title')
    <title>Detect-app</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
    <link rel="stylesheet" href="{{asset('css/enregistrement.css')}}">
@endsection

@section('content')
  <section class="banner-section">
    <div class="section-title">
        <h1>Enregistrement candidats</h1>
    </div>
  </section>
  <!-- banner-end -->
  <div class="box-content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form id="contact-form" method="post" action="" role="form">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="" class="couleur-form">Nom<span class="blue">*</span></label>
                <input id="" type="text" name="" class="form-input" placeholder="Nom de l'étudiant">
                <p class="comments"></p>
              </div>
              <div class="col-md-6 mb-3">
                <label for="name" class="couleur-form">Prénom<span class="blue">*</span></label>
                <input id="" type="text" name="" class="form-input" placeholder="Prénom de l'étudiant">
                <p class="comments"></p>
              </div>
              <div class="col-md-6 mb-3">
                <label for="" class="couleur-form">Niveau<span class="blue">*</span></label>
                <input id="" type="text" name="" class="form-input" placeholder="Le Niveau de l'étudiant">
                <p class="comments"></p>
              </div>
              <div class="col-md-6 mb-3">
                <label for="" class="couleur-form">Matricule<span class="blue">*</span></label>
                <input id="" type="text" name="" class="form-input" placeholder="Le matricule de l'étudiant">
                <p class="comments"></p>
              </div>
              <div class="col-md-6 mb-3">
                <label for="" class="couleur-form">Numéro<span class="blue">*</span></label>
                <input id="" type="number" name="" class="form-input" placeholder="Le matricule de l'étudiant">
                <p class="comments"></p>
              </div>
              <div class="col-md-6 mb-3">
                <label for="" class="couleur-form">Photo<span class="blue">*</span></label>
                <input id="" type="file" name="" class="form-input" placeholder="Le matricule de l'étudiant">
                <p class="comments"></p>
              </div>
            </div>
            <hr>
            <div class="mt-5 form-footer">
              <div class="form-footer-box">
                <button type="button" class="btn-connexion">Enregistrer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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
@endsection

@section('scripts')
  <script src="ressources/js/main.js"></script>
@endsection