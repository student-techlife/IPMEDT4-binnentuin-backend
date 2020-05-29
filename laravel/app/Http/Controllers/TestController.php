<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $result = "Yes het werkt! - Nog een keer testen!";
        return $result;
    }
}
