<div class="table-responsive">
    <table class="table" id="categoryDocumentRels-table">
        <thead>
        <tr>
            <th>Category Id</th>
        <th>Document Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categoryDocumentRels as $categoryDocumentRel)
            <tr>
                <td>{{ $categoryDocumentRel->category_id }}</td>
            <td>{{ $categoryDocumentRel->document_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['categoryDocumentRels.destroy', $categoryDocumentRel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categoryDocumentRels.show', [$categoryDocumentRel->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categoryDocumentRels.edit', [$categoryDocumentRel->id]) }}"
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
