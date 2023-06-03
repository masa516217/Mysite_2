@extends('layout')

@section('contents')
<h1>掲示板</h1><br>
<div class="all">
    <div class="one">
        <h2><a href="first">first</a></h2>
    </div>
    <div class="two">
        <h2><a href="second">second</a></h2>
    </div>
    <div class="three">
        <h2><a href="third">third</a></h2>
    </div>
</div>
<a href="/logout">ログアウト</a>
@endsection