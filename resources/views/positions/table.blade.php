<div class="table-responsive">
    <table class="table" id="positions-table">
        <thead>
        <tr>
            <th>Наименование на русском</th>
        <th>Наименование на казахском</th>
        <th>Наименование на анлийском</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($positions as $position)
            <tr>
                <td>{{ $position->title_ru }}</td>
            <td>{{ $position->title_kz }}</td>
            <td>{{ $position->title_en }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['positions.destroy', $position->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('positions.show', [$position->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('positions.edit', [$position->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @if(!in_array($position->id,[1,2,3]))
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
