<div class="table-responsive">
    <table class="table" id="positionTeams-table">
        <thead>
        <tr>
            <th>Position Id</th>
        <th>Team Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($positionTeams as $positionTeam)
            <tr>
                <td>{{ $positionTeam->position_id }}</td>
            <td>{{ $positionTeam->team_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['positionTeams.destroy', $positionTeam->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('positionTeams.show', [$positionTeam->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('positionTeams.edit', [$positionTeam->id]) }}"
                           class='btn btn-default btn-xs'>
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
