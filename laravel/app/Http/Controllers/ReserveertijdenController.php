<?php

namespace App\Http\Controllers;

use DB;
use App\Reserveertijden;
use Illuminate\Http\Request;

class ReserveertijdenController extends Controller
{
    //
    public function index(){
      return Reserveertijden::get()->all();
    }
}
