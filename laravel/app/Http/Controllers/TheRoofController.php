<?php

namespace App\Http\Controllers;

use DB;
use App\TheRoof;
use Illuminate\Http\Request;

class TheRoofController extends Controller
{
    //
    public function index(){
      return TheRoof::get()->all();
    }
}
