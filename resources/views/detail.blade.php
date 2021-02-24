
@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="containt-success">
            <div class="block-success">
                <div class="row">
                    @if(!empty($student) || !is_null($student) )
                    <div class="col-8">
                        <div class="block-success_info">
                            <h1>Verification de d'identité</h1>
                            <p>Nom : <b>{{ $student->name }}</b> </p>
                            <p>Prénoms : <b>{{ $student->lastname }}</b> </p>
                            <p>Matricule : <b>{{ $student->matricule }}</b> </p>
                            <div class="block-success_info-illustrator">
                                <p>Classe : <b>{{ $student->classe->title ?? '' }}</b> </p>
                                <img src="" alt="">
                                
                            </div>
                            <p> {{ $student->is_active ? 'vous etes autorisé' : 'vous n\'êtes pas autorisé'}} </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-success_illustrator">
                            <img src="" alt="" class="img-fluid cadre-photo">
                        </div>
                    </div>
                    @else
                        <h1>Utilisateur non existant</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection