@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')

    <table>
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
      </tr>
      @foreach ($items as $item)
      <tr>
        <td>{{$item->title}}</td>
        <td>{{$item->author}}</td>
        <td>{{$item->price}}</td>
      </tr>
      @endforeach
    </table>
@endsection

@section('footer')
copylight 2020 tuyano.
@endsection