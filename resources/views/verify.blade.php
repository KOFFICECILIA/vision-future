@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="containt-success">
            <div class="verify">
                <div class="row">
                    <form id="contact-form-verify" method="post" action="" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="matricule" class="couleur-form">Matricule</label>
                                <input id="matricule" type="text" name="matricule" class="form-input" placeholder="entrez votre matricule">
                                <p class="comments"></p>
                            </div>
                            
                        </div>
                        <hr>
                        <div class="mt-5 form-footer">
                            <div class="form-footer-box">
                                <button type="submit" class="btn-connexion">verification</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection