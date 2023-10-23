<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [\App\Http\Controllers\PostController::class,'index']);
Route::get('/test', function ()
{
    return view('test');
});

Route::post('/addPost',[TestController::class,'addPost']);


Route::get('/show', [\App\Http\Controllers\PostController::class,'show']);

Route::delete('/deleteCountry',);

Route::delete('delete/{id}',[\App\Http\Controllers\PostController::class,'deletePost']);


