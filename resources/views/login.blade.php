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
<form action="{{ route('pass') }}" method="POST">
    @csrF
    <h1>Вход</h1>
    <label>Имя</label><br>
    <input type="text" name="name"><br>
    <label>Пароль</label><br>
    <input type="password" name="password"><br><br>
    <button type="submit" class="btn_create">Войти</button>
</form>
</div>
@endsection
