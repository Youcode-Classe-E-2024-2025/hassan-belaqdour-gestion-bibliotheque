<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/userdash', [BookController::class, 'showUserBooks'])->middleware('auth')->name('userdash');

Route::get('/admindash', function () {
    return view('admindash');
})->middleware('auth');

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/addbook', [BookController::class, 'showAddBookForm'])->middleware('auth')->name('addbook.show');
Route::post('/admin/addbook', [BookController::class, 'storeBook'])->middleware('auth')->name('addbook.store');

Route::get('/books', [BookController::class, 'showAllBooks'])->name('books.all');

Route::get('/allbooks', function () {
    return view('allbooks');
});

Route::get('/admin/books/{book}/edit', [BookController::class, 'editBook'])->middleware('auth')->name('books.edit');
Route::put('/admin/books/{book}', [BookController::class, 'updateBook'])->middleware('auth')->name('books.update');
Route::delete('/admin/books/{book}', [BookController::class, 'destroyBook'])->middleware('auth')->name('books.destroy');
Route::get('/books/{id}', [BookController::class, 'getBookDetails']);