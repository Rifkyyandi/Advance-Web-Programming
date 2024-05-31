<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;
        return view('pages.index', compact('name', 'email'));
    }
}
