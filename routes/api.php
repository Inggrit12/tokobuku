<?php
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('Buku',function() {
//     return CBuku::class=>index();
// });
// Route::get('/Dashboard', [CDashboard::class, 'index']);
 Route::get('Buku', 'App\Http\Controllers\CBuku@index');
 Route::post('Buku', 'App\Http\Controllers\CBuku@create');


// Route::post('/Product', Product::class);

// Route::resource('Buku', CBuku::class);
// Route::resource('User', CUser::class);
