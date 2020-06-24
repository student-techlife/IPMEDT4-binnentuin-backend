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

    public function update(Request $request){

        if($request->input('status')=='Gesloten'){
          $binnentuin = Binnentuin::where('dag_van_week', '=', $request->input('dag_van_week'))->update([
            'status' => $request->input('status')=='Gesloten' ? 0:1
            ]);
           return back()->withStatus(__('De status is veranderd naar: Gesloten'));


        }else{

          $binnentuin = Binnentuin::where('dag_van_week', '=', $request->input('dag_van_week'))->update([
          'openingstijd' => $request->input('openingstijd'),
          'sluitingstijd' => $request->input('sluitingstijd'),
          'status' => $request->input('status')=='Open' ? 1:0

          ]);
          return back()->withStatus(__('Openingstijden succesvol aangepast'));
          }

    }
}
