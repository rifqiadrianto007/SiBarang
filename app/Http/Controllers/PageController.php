<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        $username = session('username');
        return view('dashboard', compact('username'));
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
        session(['username' => $username]);
        return redirect()->route('dashboard');
    }
}
