<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class Places extends Controller
{

    public function index(){
        $lugares = Place::all();
        return view('places.index', compact('lugares'));
    }

    public function create(){

        return view('places.create');

    }

    public function store(Request $request){

        $request->validate([
                'departamento' => 'required',
        ]);

        $lugar = Place::create([
            'departamento' => $request->departamento,
            'municipio' => $request->municipio,
            'aldea' => $request->aldea,
            'ktm_aprox' => $request->ktm_aprox,
            'estado' => 1
        ]);

        return redirect()->route('lugares.index');

    }

    public function edit(int $id){
        $lugar = Place::find($id);

        return view('places.edit', compact('lugar'));

    }

    public function update(Request $request, int $lugarId){

        return $request;

        return redirect()->route('lugares.index');

    }

}
