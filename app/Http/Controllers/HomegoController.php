<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomegoController extends Controller
{
    public function gofirst()
    {
        return view('home');
    }
}
