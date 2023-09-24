<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeiderController;
use App\Http\Controllers\TakController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorElement;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/insta', [InstagramController::class, 'index']);

Route::get('/', function () {
    return view('index', [
        'articles' => Article::orderByDesc('created_at')->take(3)->get(),
        'instagramPosts' => [InstagramController::class, 'index'],
    ]);
});

Route::get('/uniform', function () {
    return view('uniform');
});

Route::get('/over-ons', function () {
    return view('over-ons');
});

Route::get('takken', [TakController::class, 'index']);

Route::get('nieuws', [ArticleController::class, 'index']);
Route::get('nieuws/create', [ArticleController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('nieuws', [ArticleController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('nieuws/{id}', [ArticleController::class, 'show']);
Route::get('nieuws/{id}/edit', [ArticleController::class, 'edit'])->middleware(['auth', 'verified']);
Route::put('nieuws/{id}', [ArticleController::class, 'update'])->middleware(['auth', 'verified']);
Route::delete('/nieuws/{id}', [ArticleController::class, 'delete'])->middleware(['auth', 'verified']);

Route::get('leiding', [LeiderController::class, 'index']);
Route::get('leiding/create', [LeiderController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('leiding', [LeiderController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('leiding/{id}', [LeiderController::class, 'show']);
Route::get('leiding/{id}/edit', [LeiderController::class, 'edit'])->middleware(['auth', 'verified']);
Route::put('leiding/{id}', [LeiderController::class, 'update'])->middleware(['auth', 'verified']);
Route::delete('leiding/{id}', [LeiderController::class, 'delete'])->middleware(['auth', 'verified']);

Route::get('admin/nieuws', [AdminController::class, 'nieuws'])->middleware(['auth', 'verified']);
Route::get('admin/leiding', [AdminController::class, 'leiding'])->middleware(['auth', 'verified']);

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [AdminController::class, 'store'])->name('profile.store');
});

require __DIR__ . '/auth.php';
