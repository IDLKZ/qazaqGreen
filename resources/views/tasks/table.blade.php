<div class="table-responsive">
    <table class="table" id="tasks-table">
        <thead>
        <tr>
            <th>№ задачи</th>
        <th>Заголовок на русском</th>
        <th>Заголовок на казахском</th>
        <th>Заголовок на английском</th>
            <th colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->order }}</td>
            <td>{{ $task->title_ru }}</td>
            <td>{{ $task->title_kz }}</td>
            <td>{{ $task->title_en }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tasks.show', [$task->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tasks.edit', [$task->id]) }}"
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
