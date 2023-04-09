<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Check if the user is logged in as an admin
        if (Auth::guard('admin')->check()) {
            $user = Auth::guard('admin')->user();
            return view('admin.index', compact('user'));
        }

        // Check if the user is logged in as an artisan
        if (Auth::guard('artisan')->check()) {
            $user = Auth::guard('artisan')->user();
            return view('artisan.index', compact('user'));
        }

        // Otherwise, assume the user is logged in as a regular user
        $user = Auth::user();
        return view('user.index', compact('user'));
    }
}
