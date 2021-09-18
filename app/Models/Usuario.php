<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected  $table='usuarios'; // lo dices que la tabla se llama cartegorias 
     protected $primaryKey='idusuario';
    protected $fillable=['usuario','contraseña'];
    public $timestamps=false; 

}
