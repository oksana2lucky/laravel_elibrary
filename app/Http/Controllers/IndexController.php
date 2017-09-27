<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newBooks = Book::join('authors', 'books.author_id', '=', 'authors.id')
            ->select('books.id', 'books.title', 'books.image_url', 'books.description', 'books.created_at', 'authors.name as author')
            ->getQuery()
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('home', compact('newBooks'));
    }
}
