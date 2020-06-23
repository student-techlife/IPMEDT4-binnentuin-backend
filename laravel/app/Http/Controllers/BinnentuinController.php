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
      $binnentuin = Binnentuin::where('dag_van_week', '=', $request->input('dag_van_week'))->update([

        'openingstijd' => $request->input('openingstijd'),
        'sluitingstijd' => $request->input('sluitingstijd')

      ]);

      return redirect('/profile');
      // try {
      //   Binnentuin::where("dag_van_week", "=", $dag)
      //   ->update([
      //     'openingstijd' =>$request->input('openingstijd'),
      //     'sluitingstijd' =>$request->input('sluitingstijd')
      //   ]);
      //   return redirect("/home");
      // }
      //
      // catch(Exception $e){
      //   return redirect("/profile");
      // }
    }
}
