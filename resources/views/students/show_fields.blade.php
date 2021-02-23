<!-- Matricule Field -->
<div class="col-sm-12">
    {!! Form::label('matricule', 'Matricule:') !!}
    <p>{{ $student->matricule }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $student->name }}</p>
</div>

<!-- Lastname Field -->
<div class="col-sm-12">
    {!! Form::label('lastname', 'Lastname:') !!}
    <p>{{ $student->lastname }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $student->gender }}</p>
</div>

<!-- Photo Field -->
<div class="col-sm-12">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{{ $student->photo }}</p>
</div>

<!-- Classe Id Field -->
<div class="col-sm-12">
    {!! Form::label('classe_id', 'Classe Id:') !!}
    <p>{{ $student->classe_id }}</p>
</div>

<!-- Birthday Field -->
<div class="col-sm-12">
    {!! Form::label('birthday', 'Birthday:') !!}
    <p>{{ $student->birthday }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $student->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $student->updated_at }}</p>
</div>

