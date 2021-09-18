<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    protected  $table='director'; // lo dices que la tabla se llama cartegorias 
    protected $primaryKey='iddirector';
  protected $fillable=['nombre','idusuario'];
  public $timestamps=false; 
}
