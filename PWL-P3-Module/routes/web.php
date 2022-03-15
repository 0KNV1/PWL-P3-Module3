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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
    return view('pages.about');
});
Route::get('/contact-us', function(){
    return view('pages.contact-us');
});
Route::get('/our-clients', function(){
    return view('pages.our-clients');
});
Route::get('/our-product', function(){
    return view('pages.plant');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
