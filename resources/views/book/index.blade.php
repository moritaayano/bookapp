@extends('layouts.helloapp')

@section('title','Book.index')

@section('menubar')
@parent
booksページ
@endsection

@section('content')
<table>
    <tr><th>booksdata</th></tr>
    @foreach ($items as $item)

        <tr>
            <td>{{$item->getData()}}</td>
          
          </tr>
    
    @endforeach
</table>
@endsection