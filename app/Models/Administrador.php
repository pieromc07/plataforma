<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;
    protected  $table='administradores'; // lo dices que la tabla se llama cartegorias 
    protected $primaryKey='idadministrador';
    protected $fillable=['idusuario','apellido','nombre','cel','cargo'];
    public $timestamps=false; 
}
