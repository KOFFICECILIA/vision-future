<div class="table-responsive">
    <table class="table" id="matiereLevels-table">
        <thead>
            <tr>
                <th>Matiere Id</th>
        <th>Level Id</th>
        <th>Coefficient</th>
        <th>Is Active</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matiereLevels as $matiereLevel)
            <tr>
                <td>{{ $matiereLevel->matiere_id }}</td>
            <td>{{ $matiereLevel->level_id }}</td>
            <td>{{ $matiereLevel->coefficient }}</td>
            <td>{{ $matiereLevel->is_active }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['matiereLevels.destroy', $matiereLevel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('matiereLevels.show', [$matiereLevel->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('matiereLevels.edit', [$matiereLevel->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
