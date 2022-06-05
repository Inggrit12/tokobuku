<?php

use App\Http\Controllers\CDashboard;
use App\Http\Controllers\CBuku;
use App\Http\Controllers\CUser;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Product;
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
Route::get('/', function(){
    return view('Dashboard');
});


Route::get('/Dashboard', [CDashboard::class, 'index']);
Route::get('/Product', Product::class);
// Route::resource('Buku', CBuku::class);
Route::resource('User', CUser::class);