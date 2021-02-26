@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="containt-success">
            <div class="block-form">
                <div class="row">
                    {!! Form::model($student, ['route' => ['students.update', $student->id], 'method' => 'patch', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Nom</label>
                                <input id="" type="text" name="name" class="form-input" required placeholder="Nom de l'étudiant" value="{{$student->name}}">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="name" class="couleur-form">Prénom</label>
                                <input id="" type="text" name="lastname" class="form-input" required placeholder="Prénom de l'étudiant" value="{{$student->lastname}}">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="classe_id" class="couleur-form">Classe</label>
                                <!-- <input id="" type="text" name="" class="form-input" placeholder="Le Niveau de l'étudiant"> -->
                                <select name="classe_id" id="classe_id" class="form-control" required>
                                    @foreach($classes as $classe)
                                        <option value="{{$classe->id}}" {!! $classe->id == $student->classe_id ? 'selected' : '' !!}>{{$classe->title}}</option>
                                    @endforeach
                                </select>
                                <small class="comments">Veuillez créer des classes d'abord</small>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="matricule" class="couleur-form">Matricule</label>
                                <input id="matricule" type="text" name="matricule" class="form-input" placeholder="Le matricule de l'étudiant"  value="{{$student->matricule}}">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="gender" class="couleur-form">Sexe</label><br>
                                <input type="radio" name="gender" id="gender" value="1" {!! $student->gender == 1 ? 'checked' : '' !!}> Homme &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" id="gender" value="0" {!! $student->gender == 0 ? 'checked' : '' !!}> Femme
                                <!-- <input id="" type="number" name="" class="form-input" placeholder="Le matricule de l'étudiant"> -->
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="date" class="couleur-form">Date de naissance</label>
                                <input type="date" name="birthday" class="form-control" id="date" placeholder="Date de naissance"  value="{{$student->birthday}}">
                                <!-- <input id="" type="number" name="" class="form-input" placeholder="Le matricule de l'étudiant"> -->
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Actif</label>
                                <input type="checkbox" name="is_active" value="1" {!! $student->is_active == 1 ? 'checked' : '' !!}>
                                <input type="hidden" name="is_active" value="0">
                                <!-- <input id="" type="number" name="" class="form-input" placeholder="Le matricule de l'étudiant"> -->
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Photo</label>
                                <input id="" type="file" name="photo" onchange="loadFile(event)" class="form-file" placeholder="Le matricule de l'étudiant">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <img src="{{asset('$student->photo')}}" max-width="200" id="output_cover" alt="{{ $student->name }} {{ $student->lastname }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
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
    <script>
        var loadFile = function (event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output_cover');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection