<div class="table-responsive">
    <table class="table" id="categoryDocuments-table">
        <thead>
        <tr>
            <th>Наименование на русском</th>
        <th>Наименование на казахском</th>
        <th>Наименование на английском</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categoryDocuments as $categoryDocument)
            <tr>
                <td>{{ $categoryDocument->title_ru }}</td>
            <td>{{ $categoryDocument->title_kz }}</td>
            <td>{{ $categoryDocument->title_en }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['categoryDocuments.destroy', $categoryDocument->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categoryDocuments.show', [$categoryDocument->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categoryDocuments.edit', [$categoryDocument->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @if(!in_array($categoryDocument->id,[1,2,3]) )
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
