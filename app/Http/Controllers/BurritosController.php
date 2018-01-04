<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Burrito;

class BurritosController extends Controller
{
    public function index()
    {
      return view('burritos.index', ['burritos'=>Burrito::all()]);
    }

    public function create()
    {
      return view('burritos.create');
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
