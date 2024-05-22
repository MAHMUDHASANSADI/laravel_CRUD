<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.list', [
            'products' => Product::all()
        ]);
    }
    //product create
    public function create()
    {
        return view('product.create');
    }

    //product store
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'sku' => ['required', 'string', 'max:255'],
            'price' => ['required'],
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('product.index')->with('success', 'product added successfullty');
    }

    //product edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', [
            'product' => $product
        ]);
    }
    //product update
    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'sku' => ['required', 'string', 'max:255'],
            'price' => ['required'],
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('product.store', $product->id)->with('success', 'product added successfullty');
    }

    //product show
    public function show()
    {
        return view('product.show');
    }
    //product delete
    public function delete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();
        return redirect()->route('product.list', $product->id)->with('success', 'product deleted successfullty');


    }
}
