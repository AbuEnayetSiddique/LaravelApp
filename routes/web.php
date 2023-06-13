<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
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

Route::get('/contact', function () {
    return "Abu Enayet Siddique";
});

Route::get('/easy', function () {
    return "<b>Laravel makes it easy to develop websites!</b>";
});

Route::get('uid/{id}', function ($id) {
    return "ID: $id"; })->where('id', '[0-9]+'
);


Route::group([
    'as' => 'users.',
    'prefix' => 'users',
    'where'  => ['id' => '[0-9]+','user' => '[A-Za-z\s]+' ]], function (){
    Route::get('{user?}', function($user='batman') {
        return 'Name : '.$user;
    })->name('show');

    Route::get('{user?}/images/{id?}', function ($user , $id) {
        return 'Name: ' . $user . ' Image: ' . $id;
    })->name('images.show');
});

Route::get('/aboutme', function(){
    $name  = ['fullname' => 'Abu Enayet Siddique'];
    return view('pages/about', compact( 'name'));
});


Route::get ('/thingsiknow', function (){
    $items = ['HTML', 'CSS', 'JavaScript', 'PHP', 'SQL'];
    return view('pages/langs', compact("items"));
});

Route::get('/contact', function () {
    $email=  ['enayet.ssagar@gmail.ca'] ;
    return view('pages/contact', compact("email"));
});

Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/{article}', [ArticleController::class, 'show']);

Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'show']);

