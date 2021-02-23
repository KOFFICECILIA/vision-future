<div class="table-responsive">
    <table class="table" id="matieres-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Description</th>
        <th>Slug</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matieres as $matiere)
            <tr>
                <td>{{ $matiere->title }}</td>
            <td>{{ $matiere->description }}</td>
            <td>{{ $matiere->slug }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['matieres.destroy', $matiere->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('matieres.show', [$matiere->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('matieres.edit', [$matiere->id]) }}" class='btn btn-default btn-xs'>
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
