<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected  $table='alumnos'; // lo dices que la tabla se llama cartegorias 
      protected $primaryKey='idalumno';
    protected $fillable=['idusuario','apellido','nombre','edad','matricula','cel','facultad',
                        'escuela','año_ingreso','ciclo','estado'];
    public $timestamps=false; 
}
