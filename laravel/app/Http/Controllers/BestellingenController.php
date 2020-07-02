<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bestellingen;

class BestellingenController extends Controller
{
    // Return index view
    public function index() {
        $bestellingen = Bestellingen::all();
        return view('bestellingen.index', compact('bestellingen'));
    }
}
