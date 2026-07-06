<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function index() {
        $title = "products";
        $allProduct = Products::all();
        $countProduct = Products::all()->count();
        return view('user.products', compact('title','allProduct', 'countProduct'));
    }
}
