<?php

namespace App\Http\Controllers;

use DB;
use App\Binnentuin;
use Illuminate\Http\Request;

class BinnentuinController extends Controller
{
    //
    public function index(){
      return Binnentuin::get()->all();
    }
}
