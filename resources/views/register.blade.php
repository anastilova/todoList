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
        <form action="{{ route('create') }}" method="POST">
            <h1>Регистрация</h1>
            @csrF
            <label type=>Имя</label>
            <input type="text" name="name"><br>
            <label>Пароль</label><br>
            <input type="password" name="password"><br><br>
            <button type="submit" class="btn_create">Создать пользоватея</button>
        </form>
</div>

@endsection
