<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\ReadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('books', BookController::class);
Route::resource('readers', ReadController::class);
Route::resource('borrows', BorrowController::class);