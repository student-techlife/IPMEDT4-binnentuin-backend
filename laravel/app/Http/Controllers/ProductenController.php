<?php

namespace App\Http\Controllers;

use DB;
use Image;
use App\Producten;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductenController extends Controller {

    // toont de index lijst in het dashboard
    public function index() {
      $producten = Producten::all();
      return view('producten.index', compact('producten'));
    }

    // public function show() {
    //   return view('producten.show');
    // }

    // verwijderd een product
    public function destroy(Producten $producten) {
      $producten->delete();
      alert()->success('Gelukt!','Het product is verwijderd');
      return redirect()->route('producten.index');
    }

    // Sla een nieuw aangemaakte product op in de database
    public function store(Request $request) {
      // Save the uploaded image
      $image = $request->input('naam');
      $filename = str_replace(' ','',$image . '.' . 'jpg');
      $path = public_path('binnentuin/img/producten/' . $filename);
      Image::make($request->image)->resize(200, 200, function($constraint) {
        $constraint->aspectRatio();
      })->save($path);
      
      $product = new Producten();
      
      $product->naam              = $request->input('naam');
      $product->beschrijving      = $request->input('beschrijving');
      $product->categorie         = $request->input('categorie');
      $product->prijs             = $request->input('prijs');
      $product->locatie           = $request->input('locatie');
      $product->img = $filename;
      
      try {
        $product->save();
        alert()->success('Gelukt!','Een nieuw product is aangemaakt!');
        return redirect()->route('producten.index');
      } catch (\Throwable $th) {
        dd($th);
      }
    }

    // Toon de edit pagina van een product
    public function edit(Producten $producten) {
      return view('producten.edit', compact('producten'));
    }

    // Opslaan van nieuwe waardes na aanpassen van een product
    public function update(Request $request, Producten $producten) {
      try {
        // Op dit moment is de img uitgezonderd
        $producten->update($request->except(['img']));
        alert()->success('Gelukt!','Het product is aangepast!');
        return redirect()->route('producten.index');
      } catch (\Throwable $th) {
        dd($th);
      }
    }


    // Onderstaand zijn functies voor de API calls
    public function indexProducten(){
      return Producten::get()->all();
    }

    public function getProCat($categorie) {
      return Producten::where('categorie','=',$categorie)->get();
    }
}
