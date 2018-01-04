<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BurritosController extends Controller
{
    public function index()
    {
      return view('burritos.index' , ['burritos'=>Burrito::all()]);
    }
}
