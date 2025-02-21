<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;  // Importez Auth

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

    public function editBook(Book $book)
    {
        return view('editbook', ['book' => $book]);
    }

    public function updateBook(Request $request, Book $book)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:250',
            'author' => 'required|string|max:250',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
        ]);

        return redirect()->route('books.all')->with('success', 'Livre mis à jour avec succès !');
    }

    public function destroyBook(Book $book)
    {
        $book->delete();

        return redirect()->route('books.all')->with('success', 'Livre supprimé avec succès !');
    }

    public function showUserBooks()
    {
        $books = Book::all(); // Récupérez tous les livres (ou filtrez-les si nécessaire)
        return view('userdash', ['books' => $books]);
    }

    public function getBookDetails($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['error' => 'Livre non trouvé'], 404);
        }

        return response()->json($book);
    }
}