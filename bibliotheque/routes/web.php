<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/userdash',function(){
    return view('userdash');
})->middleware('auth');

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