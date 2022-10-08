<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function store(Request $request){
        //dd($request);
        $jugador = new Jugador;
        $jugador->name = $request->input('name');
        $jugador->apellido = $request->input('apellido');
        $jugador->ci = $request->input('ci');
        $jugador->fechaNac = $request->input('fechaNac');
        $jugador->foto = $request->input('foto');

        $jugador->save();

        return response()->json([
            'status' => 200,
            'message'=> 'se aniadido estudiante exitosamente',
        ]);
    }
}
