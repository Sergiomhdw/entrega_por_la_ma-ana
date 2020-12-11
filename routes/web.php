<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\User;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('image',App\Http\Controllers\ImageController::class);

Route::post('image/{image_id}/edit', [App\Http\Controllers\ImageController::class, 'edit'])->name('image.edit');

Route::post('image/{image_id}', [App\Http\Controllers\ImageController::class, 'update'])->name('image.update');

Route::get('comments/create/{image}/{user}',[App\Http\Controllers\CommentController::class, 'create'])->name('comments.create');

Route::post('comentarios',[App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');


Route::post('image/subir/{user}',[App\Http\Controllers\ImageController::class,'create'])->name('image.create');
Route::post('image',[App\Http\Controllers\ImageController::class, 'store'])->name('image.store');