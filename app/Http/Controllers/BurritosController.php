<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BurritosController extends Controller
{
    public function index()
    {
      $burritos = Burrito::all();

      return View::make('burritos.index')
          ->with('burritos' , $burritos);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {
      
    }
}
