<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){
       
        $items = Book::all();
        return view('board.index',['items' => $items]);
    }
}
