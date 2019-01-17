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
use App\Product;

Route::get('/', 'PageController@index');
Route::get('/about-us', 'PageController@aboutUs');
//Route::get('/about-us', function () {
//    return view('aboutUs');
//});
Route::get('/products', function () {
    $products = Product::all();
//   $products = DB::table('products')
//       ->orderBy('name')
//       ->get();
    //       ->where('name','like',"%x%")
//       ->where('description','like','%2018%')
    return view('products.index', compact('products'));
});
Route::get('/products/iphone', function () {
    $products = Product::apple();

//   $products = DB::table('products')
//       ->orderBy('name')
//       ->get();
    //       ->where('name','like',"%x%")
//       ->where('description','like','%2018%')
    return view('products.index', compact('products'));
});
Route::get('products/{id}', function ($id) {
    $product = Product::find($id);
//   $product = DB::table('products')->find($id);
//       ->where('id','=', $id)
//       ->first();
    return view('products.show', compact('product'));
});