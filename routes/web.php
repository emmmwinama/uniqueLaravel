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

Route::get('test', function (){
    return view('test.test');
});
Route::prefix('properties')->group(function(){
    Route::get('/', 'PropertyController@index')->name('properties');
    Route::get('/{id}', 'PropertyController@show');
});

Route::get('services', 'MiscController@services')->name('services.home');
Route::get('blog', 'MiscController@blog');
Route::get('about', 'MiscController@about');
Route::post('email', 'MiscController@send')->name('email.submit');

Route::middleware('auth')->prefix('admin/properties')->group(function(){
    Route::get('/create', 'PropertyController@create')->name('property.create');
    Route::get('/{property}/edit', 'PropertyController@edit');
    Route::post('/', 'PropertyController@store')->name('property.store');
    Route::put('/{property}', 'PropertyController@update');
    Route::delete('/{property}', 'PropertyController@destroy')->name('property.destroy');
});


Auth::routes();

Route::get('/home', function(){
    return redirect(route('properties'));
})->name('home');
