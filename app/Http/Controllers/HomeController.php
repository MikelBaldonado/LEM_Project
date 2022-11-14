<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Images;
// use Illuminate\Support\Facades\Auth;
// use DB;

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
        // $imageData = Images::all();
        // return view('home')->with('imageData', $imageData);
        return view('home');
    }
}
