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


Route::prefix('admin')->group(function () {
    Route::resource('fashion', FashionController::class,['middleware' => 'auth']);
    Route::get('fashion/delete/{id}','FashionController@delete',['middleware' => 'auth']);
});


Auth::routes();
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'FashionController@index',['middleware' => 'auth'])->name('home');

