<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Persona;
use Illuminate\Support\Facade\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PersonaController extends Controller
{
    
    public function index()
    {
        $personas = Persona::find($id);
        return $personas;
    }

   
    public function store(Request $request)
    {
        $personas = new Persona;
        
        $personas->nombre=$request->nombre;
        $personas->apellidos=$request->apellidos;
        $personas->ci=$request->ci;
        $personas->sexo=$request->sexo;
        $personas->fechaNacimiento=$request->fechaNacimiento;
        $personas->nacionalidad=$request->nacionalidad;

        $personas->save();
        return response()->json([
            'status' => 200,
            'message'=> 'Persona registrada exitosamente',
        ]);
    }

    public function show()
    {
        $personas = Persona::All();
      return $personas;
    }

    
    public function update(Request $request, $id)
    {
        $personas = Persona::find($id);
        $personas -> update($request->all());

        return response()->json([
            'status' => 200,
            'message'=> 'se actualizo jugador exitosamente',
        ]);
    }

   
    public function destroy($id)
    {
        $personas = Persona::destroy($id);     
     
        return $personas;
        response()->json([
            'status' => 200,
            'message'=> 'se elimino jugador exitosamente',
        ]);
    }
}
