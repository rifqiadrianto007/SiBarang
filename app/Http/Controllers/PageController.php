<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        dd($username);
        return view('dashboard');
    }

    public function profile()
    {
        return view('profile');
    }

    public function kelola()
    {
        return view('kelola');
    }

    public function submitLogin(Request $request)
    {
        $username = $request->input('username');

        return view('dashboard', compact('username'));
    }
}

