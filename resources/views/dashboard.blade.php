@extends('layout.app')
@section('content')
    <h1>Добро пожаловать в админ панель</h1>
    <div class=task_box>
        <div>
        <a href=" {{ route('task-create') }}" class="btn_create">Создать задачу</a>
    </div><br>
    <div>
        <a href="/">Вернуться на главную</a>
    </div>

        @if ($tasks)
            @foreach ($tasks as $task)
                <div class="item">
                    <div class="item-id"># {{ $task->id }}</div>
                    <div class="item-title">{{ $task->title }}</div>
                    <div class="user_ctrl">
                        <div>
                            <a href="{{ route('task-edit', $task->id) }}" class="edit_btn"><i class="fa-regular fa-pen-to-square"></i></a>
                        </div>
                        <div>
                            <form action="{{ route('task-destroy', $task->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="del_btn"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
