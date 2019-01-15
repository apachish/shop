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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','PageController@index');
Route::get('/about-us','PageController@aboutUs');
//Route::get('/about-us', function () {
//    return view('aboutUs');
//});
Route::get('/products',function (){
   $product = DB::table('products')
//       ->where('name','like',"%x%")
//       ->where('description','like','%2018%')
       ->first();
   dd($product);
});