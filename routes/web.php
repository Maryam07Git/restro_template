<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookTableController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [BookTableController::class, 'home'])->name('home');
Route::get('/contact', [BookTableController::class, 'contact'])->name('contact');
Route::get('/forms/book-a-table', [BookTableController::class, 'index'])->name('book.table');
