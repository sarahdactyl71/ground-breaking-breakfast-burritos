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

    public function store(Request $request)
    {
        $burrito = new Burrito([
            'location' => $request->input('location'),
            'address' => $request->input('address'),
            'originality' => $request->input('originality'),
            'price_point' => $request->input('price_point'),
            'description' => $request->input('description'),
        ]);

        $burrito->save();
        return redirect('burritos');
    }

    // public function store(Request $request)
    // {
    //     $story = new Story([
    //         'name' => $request->input('name'),
    //         'description' => $request->input('description'),
    //     ]);
    //
    //     $story->save();
    //     return redirect('stories');
    // }

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
