<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $table= 'judadores';
    protected $fillable= [
        'name',
        'apellido',
        'ci',
        'fechaNac',
        'foto',

    ];
}
