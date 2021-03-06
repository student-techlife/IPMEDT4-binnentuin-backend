<?php

namespace App\Http\Controllers;

use DB;
use App\Binnentuin;
use App\TheRoof;

use Illuminate\Http\Request;

class BinnentuinController extends Controller
{
    public function index(){
      return Binnentuin::get()->all();
    }

    public function update(Request $request){

      // BINNENTUIN FORM
      if ($request->has('dag_van_week1')) {

        // Check if status is closed. It will change and no need to add times.
        if($request->input('status')=='Gesloten'){
          $binnentuin = Binnentuin::where('dag_van_week', '=', $request->input('dag_van_week1'))->update([
            'status' => $request->input('status')=='Gesloten' ? 0:1
          ]);
          return back()->withStatus(__('De status van de Binnentuin is veranderd naar: Gesloten'));

        // If not closed, you need to change the time also
        }else{

          // If there is no time, return an alert as error prevention
          if(!$request->input('openingstijd') or !$request->input('sluitingstijd')){
            return back()->withError(__('Om de Binnentuin weer open te zetten moeten er openingstijden worden ingevoerd.'));
          }

          // Change status and time in database
          $binnentuin = Binnentuin::where('dag_van_week', '=', $request->input('dag_van_week1'))->update([
            'openingstijd' => $request->input('openingstijd'),
            'sluitingstijd' => $request->input('sluitingstijd'),
            'status' => $request->input('status')=='Open' ? 1:0
          ]);

          return back()->withStatus(__('Openingstijden van de Binnentuin succesvol aangepast'));
          }
        }

        // THE ROOF FORM
        else {

          // Check if status is closed. It will change and no need to add times.
          if($request->input('status')=='Gesloten'){
            $theroof = TheRoof::where('dag_van_week', '=', $request->input('dag_van_week'))->update([
              'status' => $request->input('status')=='Gesloten' ? 0:1
            ]);

            return back()->withStatus(__('De status van The Roof is veranderd naar: Gesloten'));

          // If not closed, you need to change the time also
          }else{

            // If there is no time, return an alert as error prevention
            if(!$request->input('openingstijd') or !$request->input('sluitingstijd')){
              return back()->withError(__('Om The Roof weer open te zetten moeten er openingstijden worden ingevoerd.'));
            }

            // Change status and time in database
            $theroof = TheRoof::where('dag_van_week', '=', $request->input('dag_van_week'))->update([
              'openingstijd' => $request->input('openingstijd'),
              'sluitingstijd' => $request->input('sluitingstijd'),
              'status' => $request->input('status')=='Open' ? 1:0
            ]);

            return back()->withStatus(__('Openingstijden van the Roof succesvol aangepast'));
          }
        }
    }
}
