<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function viewHome() {
        return view('dashboard');
    }

    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        dd($request->all());
    }
}
