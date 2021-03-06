<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/posts/create', [PostController::class, 'create'])/*->middleware(['auth'])*/;

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store')/*->middleware(['auth'])*/;

Route::get('/posts/mypost', [PostController::class, 'myposts'])->name('posts.mine');

Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/show/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('/posts/{post}', [PostController::class, 'edit'])->name('post.edit');

Route::put('/posts/{id}', [PostController::class, 'update'])->name('post.update');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.delete');

Route::get('/chart/index', [ChartController::class, 'index']);
