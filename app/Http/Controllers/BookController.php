<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $count = 0;
        $highlight = Book::first();
        $books = Book::all();

        for($i=1; $i<11; $i++){
            $book = Book::find($i);

            if($book->like > $count){
                $count = $book->like;
                $highlight = $book;
            }
        }

        $latests = Book::orderBy('last_viewed', 'desc')->take(4)->get();

        return view('home', compact("highlight", "books", "latests"));
    }

    public function detail($id){
        $book = Book::find($id);

        return view('detail', compact("book"));
    }
}
