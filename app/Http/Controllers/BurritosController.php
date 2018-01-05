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
            'image_path' => $request->input('image_path'),
        ]);

        $burrito->save();
        return redirect('burritos');
    }

    public function show($id)
    {
        $burrito = Burrito::find($id);

        return view('burrito.show', compact('burrito', 'id'));
    }

    public function edit($id)
    {
        $burrito = Burrito::find($id);

        return view('burrito.edit', compact('burrito','id'));
    }

    public function update(Request $request, $id)
    {
        $burrito = Burrito::find($id);
        $burrito->location = $request->get('location');
        $burrito->address = $request->get('address');
        $burrito->originality = $request->get('originality');
        $burrito->price_point = $request->get('price_point');
        $burrito->description = $request->get('description');
        $burrito->image_path = $request->get('image_path');
        $burrito->save();
        return redirect('burritos');
    }

    public function destroy($id)
    {
        $burrito = Burrito::find($id);
        $burrito->delete();

        return redirect('burritos');
    }
}
