<?php

namespace App\Http\Controllers;

use DB;
use App\Producten;
use Illuminate\Http\Request;

class ProductenController extends Controller
{
    //
    public function index(){
      return Producten::get()->all();
    }
}
