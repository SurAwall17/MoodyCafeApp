<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index(){
        $title = 'dashboard';
        return view('/kasir/index', compact('title'));
    }

    public function product(){
        $title = 'product';
        return view('/kasir/product', compact('title'));
    }

    public function order(){
        $title = 'order';
        return view('/kasir/order', compact('title'));
    }

    public function notification(){
        $title = 'notification';
        return view('/kasir/notification', compact('title'));
    }

    public function report(){
        $title = 'report';
        return view('/kasir/report', compact('title'));
    }
}
