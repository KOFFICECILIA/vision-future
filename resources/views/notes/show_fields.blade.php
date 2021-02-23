<!-- Note Field -->
<div class="col-sm-12">
    {!! Form::label('note', 'Note:') !!}
    <p>{{ $note->note }}</p>
</div>

<!-- Student Id Field -->
<div class="col-sm-12">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $note->student_id }}</p>
</div>

<!-- Matiere Level Id Field -->
<div class="col-sm-12">
    {!! Form::label('matiere_level_id', 'Matiere Level Id:') !!}
    <p>{{ $note->matiere_level_id }}</p>
</div>

<!-- Coefficient Note Field -->
<div class="col-sm-12">
    {!! Form::label('coefficient_note', 'Coefficient Note:') !!}
    <p>{{ $note->coefficient_note }}</p>
</div>

<!-- Is Active Field -->
<div class="col-sm-12">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{{ $note->is_active }}</p>
</div>

<!-- Trimester Id Field -->
<div class="col-sm-12">
    {!! Form::label('trimester_id', 'Trimester Id:') !!}
    <p>{{ $note->trimester_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $note->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $note->updated_at }}</p>
</div>

