<div class="table-responsive">
    <table class="table" id="aboutuses-table">
        <thead>
        <tr>
            <th>Источник на русском</th>
        <th>Источник на казахском</th>
        <th>Источник на английском</th>
        <th>Ссылка</th>
        <th>Дата публикации</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($aboutuses as $aboutUs)
            <tr>
                <td>{{ $aboutUs->source_ru }}</td>
            <td>{{ $aboutUs->source_kz }}</td>
            <td>{{ $aboutUs->source_en }}</td>
            <td>{{ $aboutUs->url }}</td>
            <td>{{ $aboutUs->published }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['aboutuses.destroy', $aboutUs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('aboutuses.show', [$aboutUs->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('aboutuses.edit', [$aboutUs->id]) }}"
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
