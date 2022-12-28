@extends('layout.app')
@section('content')
<div class="form_box">
@if (count($errors)>0)

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
    <form action="{{ route('task-update', $task->id) }}" method="POST">
        @csrF
        <h1>Редактировать задачу</h1>
        <label for="">Название задачи</label><br>
        <input type="text" name="title" value="{{ $task->title }}"><br><br>
        <button type="submit" class="btn_create">Обновить задачу</button>
    </form>
</div>
@endsection
