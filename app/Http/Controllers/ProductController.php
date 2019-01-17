<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
//   $products = DB::table('products')
//       ->orderBy('name')
//       ->get();
        //       ->where('name','like',"%x%")
//       ->where('description','like','%2018%')
        return view('products.index', compact('products'));
    }
    public function show($id){
        $product = Product::find($id);
//   $product = DB::table('products')->find($id);
//       ->where('id','=', $id)
//       ->first();
        return view('products.show', compact('product'));
    }
    public function search($search){
        $products = Product::search($search);
        return view('products.index', compact('products'));
    }
}
