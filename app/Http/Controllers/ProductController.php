<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    /*
     * find takes an id and returns a single model. If no matching model exist, it returns null.
     * findOrFail takes an id and returns a single model. If no matching model exist, it throws an error1.
     */
    public function show($id){
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
    public function search($search){
        $products = Product::search($search);
        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(){
        dd('store');
    }
}
