<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('product.create', ['users'=>$users, 'categories'=>$categories]);
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->back()->with('message', 'Product has been Added successfully');
    }

    public function show(Product $product)
    {

    }

    public function edit(Product $product)
    {
        $users = User::all();
        $categories = Category::all();
        return view('product.edit', compact('product','users','categories'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->back()->with('message','Product Updated Successful');
    }

    public function destroy(Product $product)
    {
        $product->products()->delete();
        $product->delete();
        return redirect()->back()->with('message', 'Products data Deleted!');
    }
}
