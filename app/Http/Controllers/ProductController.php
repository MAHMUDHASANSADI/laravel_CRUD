<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

    }
    //product create
    public function create()
    {
        return view('product.create');
    }
    //product edit
    public function edit()
    {
        return view('product.edit');
    }
    //product show
    public function show()
    {
        return view('product.show');
    }
    //product delete
    public function delete()
    {
        return view('product.delete');
    }
}
