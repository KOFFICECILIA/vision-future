@extends('layouts.app')

@section('title')
  <title>Detect-app</title>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
  <link rel="stylesheet" href="{{asset('css/verif.css')}}">
@endsection

@section('content')
  <div class="box-content">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="form-title">
            <h1>Identification</h1>
          </div>
          <img src="{{asset('images/undraw_enter_uhqk.svg')}}" class="img-fluid login-img" alt="">
        </div>
        <div class="col-md-6">
          <form id="contact-form" method="post" action="" role="form">
            <div class="row">
              <div class="col-md-12">
                <label for="">Matricule  :</label>
                <input type="" id="Matricule" name="" class="form-input" placeholder="SEMB26029801">     
              </div>
              <div class="col-md-12">
                <input type="submit" onclick="event.preventDefault();" class="button1" value="Identifier" data-toggle="modal" data-target="#exampleModal">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="container">
      <div class="text-bg">
        <h1>"L'éducation de demain, ancrée dans la tradition vous invite"</h1>
        <h4>Notre objectif est de fournir à votre enfant un environnement sûr et heureux, où il pourra être lui-même et s'épanouir; tout en acquérant les bases pédagogiques nécessaires pour atteindre</h4>
      </div>
    </div>
  </section>  
@endsection  
@section('scripts')  
  <script src="{{asset('js/main.js')}}"></script>
@endsection  