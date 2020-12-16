<?php

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

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/show/{id}', [PostController::class, 'show']);
Route::get('/posts/search/{keyword}', [PostController::class, 'search']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);
Route::get('/posts/edit/{id}', [PostController::class, 'edit']);
Route::post('/posts/update/{id}', [PostController::class, 'update']);
Route::get('/posts/delete/{id}', [PostController::class, 'delete']);




Route::get('/tags', [TagController::class , 'index']);
Route::get('/tags/show/{id}', [TagController::class, 'show']);
Route::get('/tags/create', [TagController::class, 'create']);
Route::post('/tags/store', [TagController::class, 'store']);
Route::get('/tags/edit/{id}', [TagController::class, 'edit']);
Route::post('/tags/update/{id}', [TagController::class, 'update']);
Route::get('/tags/delete/{id}', [TagController::class, 'delete']);
