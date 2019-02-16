<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\ProductCreated;
use App\Http\Requests\StoreProductPost;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Kavenegar\KavenegarApi;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create','edit']);
    }

    public function index()
    {
       // $products = Product::all();//lazy load
        $products = Product::with(['user'])->get();//eager load
        return view('products.index', compact('products'));
    }

    /*
     * find takes an id and returns a single model. If no matching model exist, it returns null.
     * findOrFail takes an id and returns a single model. If no matching model exist, it throws an error1.
     */
    public function show($id)
    {
        $product = Product::with('categories')->findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function search($search)
    {
        $products = Product::search($search);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }
/*
 * by FormRequest you can check all activity before do action
 * but use validation  in controller  request Inside action  may checked
 */
    public function store(StoreProductPost $request)
    {
        $product = Auth::user()->products()->create($request->except('_token'));
        $product->categories()->attach($request->get('category_id'));
      //  $product = Product::create($request->except('_token'));
        event(new ProductCreated($product,Auth::user()));
        return redirect('/products');
        dd($product->toArray());
    }
    public function edit($id)
    {
        $product = Product::find($id);
        $this->authorize('update',$product);
//        abort_if($product->user->id != Auth::user()->id, HttpResponse::HTTP_FORBIDDEN);
//        if($product->user->id != Auth::user()->id){
//            abort(406,'can not access');
//        }
        $categories = Category::all();
        return view('products.edit',compact('product','categories'));
    }
    public function update(StoreProductPost $request,$id)
    {
        //find product
        $product = Product::find($id);
        //update
        $product->update($request->only(['name','description','weight','price']));
        //update category
        $product->categories()->sync($request->get('category_id'));
        return redirect('/products');

    }
}
