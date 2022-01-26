<div class="table-responsive">
    <table class="table" id="teams-table">
        <thead>
        <tr>
        <th>ФИО</th>
        <th>Позиции</th>
        <th>Изображение</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
{{--                <td>{{ $team->slug }}</td>--}}
            <td>{{ $team->name_ru }}</td>
            <td>{{ $team->position_ru }}</td>
            <td><img src="{{ $team->getFile("image") }}" width="200px"></td>
                <td width="120">
                    {!! Form::open(['route' => ['teams.destroy', $team->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teams.show', [$team->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('teams.edit', [$team->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
