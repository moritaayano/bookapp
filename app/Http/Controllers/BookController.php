<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        
        $items = Book::all();//booksテーブルの全レコードを取得
        return view('book.index',['items' => $items]);
    }


    public function add(Request $request)
    {
        return view('book.add');
    }
    public function create(Request $request)
    {
        $this->validate($request,Book::$rules);
        $book = new book;
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();
        return redirect('/book');

        // $param = [
        //     'title' => $request->title,
        //     'author'=> $request->author,
        //     'price'=>$request->price,
        // ];
        // DB::table('books')->insert($param);
        // return redirect('/book');
    }

}
