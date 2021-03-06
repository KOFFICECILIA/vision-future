@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="containt-success">
            <div class="block-form_two">
                <div class="row">
                    {!! Form::open(['route' => 'students.store', 'id' => 'contact-form', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Nom</label>
                                <input id="" type="text" name="name" class="form-input" required placeholder="Nom de l'étudiant">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="name" class="couleur-form">Prénom</label>
                                <input id="" type="text" name="lastname" class="form-input" required placeholder="Prénom de l'étudiant">
                                <p class="comments"></p> 
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Classe</label>
                                <!-- <input id="" type="text" name="" class="form-input" placeholder="Le Niveau de l'étudiant"> -->
                                <select name="classe_id" id="classe_id" class="form-input" required>
                                    @foreach($classes as $classe)
                                        <option value="{{$classe->id}}" class="form-input">{{$classe->level->title}}</option>
                                    @endforeach
                                </select>
                                <small class="comments">Veuillez créer d'abord des classes</small>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Matricule</label>
                                <input id="" type="text" name="matricule" class="form-input" placeholder="Le matricule de l'étudiant" required>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Sexe</label><br>
                                <input type="radio" name="gender" id="gender" value="1" checked> Homme &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" id="gender" value="0"> Femme
                                <!-- <input id="" type="number" name="" class="form-input" placeholder="Le matricule de l'étudiant"> -->
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Date de naissance</label>
                                <input type="date" name="birthday" id="date" placeholder="Date de naissance" required>
                                <!-- <input id="" type="number" name="" class="form-input" placeholder="Le matricule de l'étudiant"> -->
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Actif</label>
                                <input type="checkbox" name="is_active" value="1" >
                                <!-- <input type="hidden" name="is_active" value="0"> -->
                                <!-- <input id="" type="number" name="" class="form-input" placeholder="Le matricule de l'étudiant"> -->
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Photo</label>
                                <input id="" type="file" name="photo" onchange="loadFile(event)" class="form-file" placeholder="Le matricule de l'étudiant" required>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <img src="" max-width="200" id="output_cover" alt="">
                            </div>
                        </div>
                        <hr>
                        <div class="btn-valids">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ url('/dashboard') }}" class="btn btn-danger">Annuler</a>
                        </div>
                        
                        {{--<div class="mt-5 form-footer">
                            <div class="form-footer-box">
                                <button type="submit" class="btn-connexion">Enregistrer</button>
                            </div>
                        </div>--}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        var loadFile = function (event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output_cover');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script> -->
@endsection