@extends('layouts.helloapp')

@section('title', 'Session')

@section('menubar')
    @parent
    セッション

@endsection

@section('content')

<p>{{$session_data}}</p>
<form action="/hello/session" method="post">
    @csrf
    <input type="text" name="input" id="">
    <input type="submit" value="send">
</form>

@endsection

@section('footer')
copyright 2020 xxxx

@endsection
