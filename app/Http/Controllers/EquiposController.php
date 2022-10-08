<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;

class EquiposController extends Controller
{
    //
    public function index(){
        return Equipos::All();
    }
}
