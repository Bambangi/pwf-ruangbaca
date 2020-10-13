<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BukuController extends Controller
{
    
    public function index()
    {
        $books = Book::all();
        // $book = DB::table('books')->get();
        return view('buku/index', compact('books')); 
    }

    public function create()
    {
        return view('buku/create');
    }
 
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect('/buku');
    }

    public function show(Book $books)
    {
        return view('buku/show', compact('books'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
