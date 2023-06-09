<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Event\TestSuite\Skipped;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        // ログインしているユーザー情報をviewに渡す
        $user = Auth::user();
        return view('create', compact('user')); 
    }
}