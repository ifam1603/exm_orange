<?php

use App\Http\Controllers\orangeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [orangeController::class,'index'])->name('index');

Route::get('/blog', [orangeController::class, 'blog'])->name('blog');

Route::get('/posts/{id}', [orangeController::class, 'detail'])->name('post.detail');

Route::post('/posts/{post_id}/comment', [orangeController::class, 'addComment'])->name('addComment');

