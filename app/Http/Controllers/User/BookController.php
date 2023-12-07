<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);

        return view('user.books.index', [
            'books' => $books 
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
		$book = book::findOrFail($id);

        return view('user.books.show')->with(['book'=>$book]);
    }
	
}
