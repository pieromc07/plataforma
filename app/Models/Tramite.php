<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{

    use HasFactory;
    protected  $table='tramites'; // lo dices que la tabla se llama cartegorias 
      protected $primaryKey='idtramite';
    protected $fillable=['idalumno','idadministrador','asunto','estado','fecha','comentario','link','observacion1','observacion2','link2'];
    public $timestamps=false;
    public function alumno()
    {
        return  $this->hasOne(Alumno::class,'idalumno','idalumno');
    }    


}
