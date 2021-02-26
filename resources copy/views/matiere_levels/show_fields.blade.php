<!-- Matiere Id Field -->
<div class="col-sm-12">
    {!! Form::label('matiere_id', 'Matiere Id:') !!}
    <p>{{ $matiereLevel->matiere_id }}</p>
</div>

<!-- Level Id Field -->
<div class="col-sm-12">
    {!! Form::label('level_id', 'Level Id:') !!}
    <p>{{ $matiereLevel->level_id }}</p>
</div>

<!-- Coefficient Field -->
<div class="col-sm-12">
    {!! Form::label('coefficient', 'Coefficient:') !!}
    <p>{{ $matiereLevel->coefficient }}</p>
</div>

<!-- Is Active Field -->
<div class="col-sm-12">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{{ $matiereLevel->is_active }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $matiereLevel->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $matiereLevel->updated_at }}</p>
</div>

