<div class="table-responsive">
    <table class="table" id="partners-table">
        <thead>
        <tr>
            <th>Наименование на русском</th>
        <th>Наименование на казахском</th>
        <th>Наименование на английском</th>
        <th>Логотип</th>
        <th>Ссылка</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($partners as $partner)
            <tr>
                <td>{{ $partner->title_ru }}</td>
            <td>{{ $partner->title_kz }}</td>
            <td>{{ $partner->title_en }}</td>
            <td><img src="{{ $partner->getFile("image") }}" width="200px"> </td>
            <td>{{ $partner->url }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['partners.destroy', $partner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('partners.show', [$partner->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('partners.edit', [$partner->id]) }}"
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
