<?php

namespace App\Http\Controllers;

use DB;
use App\Reserveertijden;
use Illuminate\Http\Request;

class ReserveertijdenController extends Controller
{
    public function index(){
      return Reserveertijden::get()->all();
    }

    public function update(Request $request){
      if(is_numeric($request->input('max_aantal'))){
        $reserveertijden = Reserveertijden::where('id', '=', $request->input('dag_deel1'))->update([
          'max_aantal' => $request->input('max_aantal')
        ]);

        return back()->withStatusaantal(__('Maximale aantal aangepast'));
      } else {
        return back()->withErroraantal(__('Let op: U kunt hier alleen een getal invullen'));
      }
    }
}
