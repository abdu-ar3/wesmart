<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TbmController;
use App\Http\Controllers\Digital_readController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookshelvesController;
use App\Http\Controllers\EventController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Direct ke Halaman Login
Route::get('/', function () {
    return view('frontend.client');
});


// Autentikasi
Auth::routes();


// Route Home Controller

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("home", HomeController::class);


// Frontend
Route::get('/dashboard', [App\Http\Controllers\FrontendController::class, 'dashboard'])->name('dashboard');
Route::get('/ftbm', [App\Http\Controllers\FrontendController::class, 'ftbm'])->name('ftbm');
Route::get('/frontic', [App\Http\Controllers\FrontendController::class, 'frontic'])->name('frontic');
Route::get('/flash', [App\Http\Controllers\FrontendController::class, 'flash'])->name('flash');
Route::get('/digital', [App\Http\Controllers\FrontendController::class, 'digital_reads'])->name('digital_reads');
Route::get('/help/ebook', [App\Http\Controllers\FrontendController::class, 'ebook'])->name('ebook');
// Route::get('/digital', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');

// Route Controller User
Route::resource("users", UserController::class);

// Route Controller TBM
Route::resource('tbm', TbmController::class);

// Route Digital Read
Route::resource('digital_reads', Digital_readController::class);

// Rute Trash
Route::get('/categories/trash', [CategoryController::class, 'trash'])->name('categories.trash');

// Route Front Category

// Route Category
Route::get('/category/search', [App\Http\Controllers\CategoryController::class, 'search'])->name('category.search');
Route::resource('categories', CategoryController::class);

// Route Book
Route::get('/bookdonation', [App\Http\Controllers\BookController::class, 'books'])->name('books');
Route::get('/book/create', [App\Http\Controllers\BookController::class, 'create'])->name('book_create');
Route::get('/book/thanks', [App\Http\Controllers\BookController::class, 'thanks'])->name('thanks');
Route::post('/book/thanks', [App\Http\Controllers\BookController::class, 'thanks'])->name('thanks');
Route::resource('book', BookController::class);

// Route BookShelf
Route::get('/bookshelvesdon', [App\Http\Controllers\BookshelvesController::class, 'bookshelves_don'])->name('bookshelves_don');
Route::get('/bookshelves/thanks', [App\Http\Controllers\BookshelvesController::class, 'thanks'])->name('thanks');
Route::post('/bookshelves/thanks', [App\Http\Controllers\BookshelvesController::class, 'thanks'])->name('thanks');
Route::resource('bookshelves', BookshelvesController::class);

// Route Event
Route::resource('event', EventController::class);
