@extends('layout')

@section('contents')

<h1>ログイン</h1>
@if ($errors->any())
    <div>
    @foreach ($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
    </div>
@endif
<form action="login" method="post">
    @csrf
    email : <input name="email"><br>
    パスワード : <input name="password" type="password"><br>
    <button>ログイン</button><br>
    <a href="">会員登録</a>
</form>
@endsection