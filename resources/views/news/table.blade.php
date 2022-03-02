<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
        <tr>
        <th>Наименование на русском</th>
        <th>Наименование на казахском</th>
        <th>Наименование на английском</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $new)
            <tr>
                <td>{{ $new->slug }}</td>
            <td>{{ $new->title_ru }}</td>
            <td>{{ $new->title_kz }}</td>
            <td>{{ $new->title_en }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['news.destroy', $new->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('news.show', [$new->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('news.edit', [$new->id]) }}"
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
    <div class="p-4">
        {!! $news->links() !!}
    </div>

</div>
