<div class="table-responsive">
    <table class="table" id="magazines-table">
        <thead>
        <tr>
        <th>Наименование на русском</th>
        <th>Наименование на казахском</th>
        <th>Наименование на английском</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($magazines as $magazine)
            <tr>
            <td>{{ $magazine->title_ru }}</td>
            <td>{{ $magazine->title_kz }}</td>
            <td>{{ $magazine->title_en }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['magazines.destroy', $magazine->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('magazines.show', [$magazine->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('magazines.edit', [$magazine->id]) }}"
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
