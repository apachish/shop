<?php

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

Route::get('/session', function (\Illuminate\Http\Request $request) {
    $request->session()->put('name','ali');
    return view('welcome');
});
use App\Product;

Route::get('/', 'PageController@index');
Route::get('/about-us', 'PageController@aboutUs');
//Route::get('/about-us', function () {
//    return view('aboutUs');
//});
Route::get('/test', 'HelperController@index');
Route::get('/products', 'ProductController@index');
//Route::get('/products/search/{search}', 'ProductController@search');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::post('products', 'ProductController@store')->name('products.store');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('courses/import', 'CourseController@import')->name('courses.import');
Route::post('courses/store', 'CourseController@store')->name('courses.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
