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
<form action="{{ route('task-store') }}" method="POST">
    @csrF
    <h1>Создание задачи</h1>
    <label>Название задачи</label><br>
    <input type="text" name="title"><br><br>
    <button type="submit" class="btn_create">Создать задачу</button>
</form>
</div>
@endsection
