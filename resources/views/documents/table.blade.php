<div class="table-responsive">
    <table class="table" id="documents-table">
        <thead>
        <tr>
            <th>Наименование на русском</th>
        <th>Наименование на казахском</th>
        <th>Наименование на английском</th>
        <th>Файл</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($documents as $document)
            <tr>
                <td>{{ $document->title_ru }}</td>
            <td>{{ $document->title_kz }}</td>
            <td>{{ $document->title_en }}</td>
            <td><a href="{{ $document->getFile("file") }}" download="">Скачать</a></td>
                <td width="120">
                    {!! Form::open(['route' => ['documents.destroy', $document->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('documents.show', [$document->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('documents.edit', [$document->id]) }}"
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
