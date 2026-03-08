<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomepageController::class, 'home'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/library', [App\Http\Controllers\LibraryController::class, 'index'])->name('library.index');
    Route::post('/library/toggle/{bookId}', [App\Http\Controllers\LibraryController::class, 'toggle'])->name('library.toggle');
    Route::patch('/library/update/{id}', [App\Http\Controllers\LibraryController::class, 'update'])->name('library.update');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/books', [App\Http\Controllers\AdminController::class, 'booksIndex'])->name('books.index');
    Route::get('/books/create', [App\Http\Controllers\AdminController::class, 'booksCreate'])->name('books.create');
    Route::post('/books', [App\Http\Controllers\AdminController::class, 'booksStore'])->name('books.store');
    Route::get('/books/{id}/edit', [App\Http\Controllers\AdminController::class, 'booksEdit'])->name('books.edit');
    Route::put('/books/{id}', [App\Http\Controllers\AdminController::class, 'booksUpdate'])->name('books.update');
    Route::delete('/books/{id}', [App\Http\Controllers\AdminController::class, 'booksDestroy'])->name('books.destroy');

    Route::get('/users', [App\Http\Controllers\AdminController::class, 'usersIndex'])->name('users.index');
});

Route::get('/books', [App\Http\Controllers\HomepageController::class, 'books'])->name('books');
Route::get('/categories', [App\Http\Controllers\HomepageController::class, 'categories'])->name('categories');
Route::get('/category/{slug}', [App\Http\Controllers\HomepageController::class, 'category'])->name('category');
Route::get('/book/{id}', [App\Http\Controllers\HomepageController::class, 'show'])->name('book.show');

require __DIR__.'/auth.php';
