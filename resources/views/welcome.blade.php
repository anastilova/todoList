@extends('layout.app')
@section('content')
     <div class="container">
        <div class="menu">
            @if (!Auth::check())
            <div class="menu_item" class="btn_create"><a href="{{ route('login') }}">Вход</a></div>
            <div class="menu_item"><a href="{{ route('register') }}">Регистрация</a></div>
            @else
            <div class="menu_item"><a href="{{ route('logout') }}" class="btn_create">Выход</a></div>
            <div class="menu_item"><a href="/dashboard" class="btn_create">В админ панель</a></div>

            @endif
        </div>
        <div class="task_box">
            @if ($tasks)
                @foreach ($tasks as $task)
                    <div class="item">
                        <div class="user_icon">
                            <i class="fa-regular fa-user"></i> {{ $task->user->name }}
                        </div>
                        <div class="user_task">
                            {{ $task->title }}
                        </div>
                        @if(Auth::check() && Auth()->user()->id == $task->user->id)
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
                        @endif
                    </div>
                @endforeach
            @else
                <div>
                    Грустно, когда пусто :(
                </div>
            @endif
        </div>
     </div>
@endsection
