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
                <div class="col-4">
                    <div class="form-title">
                        <h1>Inscription</h1>
                    </div>
                    <img src="{{asset('images/undraw_secure_login_pdn4.svg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-8">
                    <form id="contact-form" method="post" action="{{route('registerSchool')}}" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="" class="couleur-form">Nom Ecole <span class="blue">*</span></label>
                                <input id="" type="text" name="ecole" class="form-input" placeholder="Nom Ecole" required>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="couleur-form">Code Ecole <span class="blue">*</span></label>
                                <input id="" type="text" name="code" class="form-input" placeholder="Code Ecole" required>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="couleur-form">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-input" placeholder="Votre Email" required>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ville" class="couleur-form">Ville<span class="blue">*</span></label> <br>
                                <select required name="ville" class="form-input col-md-12" aria-label="Default select example" style="height: 38px;opacity: 0.8; border-radius:4px">
                                    <option value="Bouaké" selected>Bouaké</option>
                                    <option value="Abidjan">Abidjan</option>
                                    <option value="Jacqueville">Jacqueville</option>
                                    <option value="Bondoukou">Bondoukou</option>
                                </select>
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password" class="couleur-form">Mot de passe<span class="blue">*</span></label>
                                <input  type="password" id="password" name="password" class="form-input" required placeholder="Votre mot de passe">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation" class="couleur-form"> Confirmer le mot de passe<span class="blue">*</span></label>
                                <input type="password" id="password_confirmation" name="password_confirmation" required onchange="checkPassword(this)" class="form-input" placeholder="Confirmer le mot de passe">
                                <p class="comments" id="error_password"></p>
                            </div>
                        </div>
                        <hr>
                        <div class="mt-5 form-footer">
                            <div class="form-footer-box">
                                <a type="button" href="{{url('/school/connexion')}}"  class="btn-connexion">Connexion</a>
                                <input class="btn-insription" type="submit" value="Enregistrer" id="submit">
                                {{-- <a type="button" href="{{url('/school/inscr')}}" class="btn-insription" data-dismiss="modal">S'inscription</a>--}}
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
    <script>
        function checkPassword(e){
            var error = document.getElementById('error_password')
            var password = document.getElementById('password')
            var submit = document.getElementById('submit')
            if(e.value != password.value){
                error.innerHTML = "<span style='color:red;'>Le mot de passe est différent</span>"
                submit.style.display = 'none';
            }else{
                submit.style.display = 'inline';
            }
        }

    </script>
@endsection