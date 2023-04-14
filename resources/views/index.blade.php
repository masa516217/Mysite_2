@extends('layout')

@section('contents')
<h1>ログイン</h1>
<form action="login" method="post">
    @csrf
    name : <input name="name"><br>
    パスワード : <input name="password" type="password"><br>
    <button>ログイン</button><br>
    <a href="">会員登録</a>
</form>
@endsection