@extends('layouts.app')

@section('title')
    <title>Detect-app</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
@endsection

@section('content')
    <div class="box-content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="form-title">
                        <h1>CONNEXION</h1>
                    </div>
                    <img src="{{asset('images/undraw_enter_uhqk.svg')}}" class="img-fluid login-img" alt="">
                </div>
                <div class="col-6">
                    <form id="contact-form" method="post" action="{{route('loginSchool')}}" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="" class="couleur-form">Email<span class="blue">*</span></label>
                                <input type="email" name="email" class="form-input" placeholder="johndoe@gmail.com" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="name" class="couleur-form">mot de passe</label>
                                <input type="password" name="password" class="form-input" required ></p>
                            </div>
                            
                        <hr>
                        <div class="mt-5 form-footer">
                            <div class="form-footer-box">
                                <button type="submit" class="btn-connexion">Connexion</button>
                                <a type="button" href="{{url('/school/inscription')}}"  class="btn-insription">S'inscrire</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
    
@section('scripts')
    <script src="{{asset('js/main.js')}}"></script>
@endsection