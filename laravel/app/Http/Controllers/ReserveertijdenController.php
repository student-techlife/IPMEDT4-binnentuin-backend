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
    public function update(Request $request){

      // Change status and time in database
      $reserveertijden = Reserveertijden::where('id', '=', $request->input('dag_deel1'))->update([
        'max_aantal' => $request->input('max_aantal')
      ]);

      return back()->withStatus(__('Openingstijden van de Binnentuin succesvol aangepast'));
      }

}
