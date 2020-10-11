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
        return view('book.index', compact('books')); 
    }

    public function create()
    {
        return view('book.create');
    }
 
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect('/buku');
    }

    public function show($id)
    {
        //
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
