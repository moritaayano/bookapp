@extends('layouts.helloapp')

@section('title','Add')

@section('menubar')
@parent
追加ページ
@endsection

@section('content')
<form action="/book/add" method="post">
    <table>
        @csrf
        <tr><th>title:</th><td><input type="text" name="title" ></td></tr>
        <tr><th>author:</th><td><input type="text" name="author"></td></tr>
        <tr><th>price:</th><td><input type="text" name="price" ></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>
@endsection