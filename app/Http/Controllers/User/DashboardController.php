<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Products;

class DashboardController extends Controller
{
    public function index(){
        $product = Products::all();
        $title = "home";
        return view('user.index', compact('title', 'product'));
    }

}
