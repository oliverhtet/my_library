<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Get all books
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'publication_year' => 'required|integer',
        ]);

        Book::create($validatedData);
        return redirect('/books');
    }

    public function edit($id)
    {
        $book = Book::find($id); // Find the book to edit (ပြင်ဆင်ရန် စာအုပ်ကို ရှာပါ)
        return view('books.edit', compact('book'));
       
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'publication_year' => 'required|integer',
        ]);

        $book = Book::find($id);
        $book->update($validatedData);
        return redirect('/books');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }
}
