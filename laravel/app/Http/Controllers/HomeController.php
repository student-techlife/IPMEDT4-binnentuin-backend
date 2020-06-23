<?php

namespace App\Http\Controllers;
use App\Binnentuin;
use App\TheRoof;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard')->with('binnentuin', Binnentuin::all())->with('theroof', TheRoof::all());
    }
}
