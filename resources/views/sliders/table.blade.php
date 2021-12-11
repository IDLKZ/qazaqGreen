<div class="table-responsive">
    <table class="table" id="sliders-table">
        <thead>
        <tr>
            <th>Изображение</th>
        <th>Заголовок на русском</th>
        <th>Заголовок на казахском</th>
        <th>Заголовок на английском</th>
        <th>Порядок</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sliders as $slider)
            <tr>
                <td><img src="{{ $slider->getFile("image") }}" width="200px"/></td>
            <td>{{ $slider->title_ru }}</td>
            <td>{{ $slider->title_kz }}</td>
            <td>{{ $slider->title_en }}</td>
            <td>{{ $slider->order }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sliders.show', [$slider->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sliders.edit', [$slider->id]) }}"
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
