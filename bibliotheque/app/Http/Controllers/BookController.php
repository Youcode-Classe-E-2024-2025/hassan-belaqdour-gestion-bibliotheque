<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showAddBookForm()
    {
        return view('addbook');
    }

    public function storeBook(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:250',
            'author' => 'required|string|max:250',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description, 
        ]);

        return redirect('/allbooks');
    }

    public function showAllBooks()
    {
        $books = Book::all();
        return view('allbooks', ['books' => $books]);
    }
}