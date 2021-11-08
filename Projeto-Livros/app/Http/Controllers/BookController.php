<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
   
    public function index()
    {   
        return Book::with('author')->get();
    
    }
 
    public function show($id)
    {
       
       return Book::with('author')->get()->find($id);
       //$book = Book::find($id);
      // $author = Author::find($book.author_id);    
       //return $author;
    }

    public function store(Request $request)
    {
        return Book::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return $book;
    }
    public function delete(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return 204; // 204 No Content 
    }//
}
