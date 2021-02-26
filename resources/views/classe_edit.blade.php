@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="containt-success">
            <div class="block-form">
                <div class="row">
                    {!! Form::model($classe, ['route' => ['classes.update', $classe->id], 'method' => 'patch']) !!}
                        <input type="hidden" name="school_id" value="{{ Auth::guard('school')->user()->id }}">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Titre</label>
                                <input id="" type="text" name="title" class="form-input" required placeholder="libelle de la classe" value="{{$classe->title}}">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Niveau</label>
                                <!-- <input id="" type="text" name="" class="form-input" placeholder="Le Niveau de l'étudiant"> -->
                                <select name="level_id" id="classe_id" class="form-control" required>
                                    @foreach($levels as $level)
                                        <option value="{{$level->id}}" {!! $classe->level_id == $classe->id ? 'selected' : '' !!}>{{$level->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="couleur-form">Actif</label>
                                <input type="checkbox" name="is_active" value="1" {!! $classe->level_id == $classe->id ? 'checked' : '' !!}>
                                <!-- <input type="hidden" name="is_active" value="0"> -->
                                <p class="comments"></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ url('/dashboard') }}" class="btn btn-danger">Annuler</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection