<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function edit(){
        $title = "profile";
        $dataUser = User::findOrFail(Auth::user()->id);
        return view('user.profile', compact('title','dataUser'));
    }
}
