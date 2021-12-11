<div class="table-responsive">
    <table class="table" id="abouts-table">
        <thead>
        <tr>
            <th>Заголовок на русском</th>
        <th>Заголовок на казахском</th>
        <th>Заголовок на английском</th>
        <th>Опубликован</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($abouts as $about)
            <tr>
                <td>{{ $about->title_ru }}</td>
            <td>{{ $about->title_kz }}</td>
            <td>{{ $about->title_en }}</td>
            <td>{{ $about->status ? "Готов" : "Не Готов"}}</td>
                <td width="120">
                    {!! Form::open(['route' => ['abouts.destroy', $about->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('abouts.show', [$about->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('abouts.edit', [$about->id]) }}"
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
