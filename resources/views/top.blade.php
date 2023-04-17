@extends('layout')

@section('contents')
<h1>掲示板</h1>
name : {{ $datum['name'] }}<br>
パスワード : {{ $datum['password'] }}<br>
@endsection