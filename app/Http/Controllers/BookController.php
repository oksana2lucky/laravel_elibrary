<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Book $book
     *
     * @return Response
     */
    public function view(Book $book)
    {
        return view('book.view', compact('book'));
    }
}
