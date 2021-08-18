<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome', 'login', 'register']]);
    }

    public function redirect()
    {
        return redirect('/hospital-nkp/login');
    }

    public function index()
    {
        return view('pages.dashboard');
    }

    public function login()
    {
        return view('login', ['background_image' => '../../assets/img/bg/sand.jpg']);
    }

    public function welcome()
    {
        return view('welcome', ['background_image' => '../../assets/img/bg/sand.jpg']);
    }

    public function register()
    {
        return view('auth.register', ['background_image' => '../../assets/img/bg/sand.jpg']);
    }

    public function preplists()
    {
        return view('pages.preplists');
    }

    public function print()
    {
        $pageSize = 'A4';

        return view('pages.print', compact(['pageSize']));
    }
    public function signature()
    {
        $pageSize = '';

        return view('pages.signature', compact(['pageSize']));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
