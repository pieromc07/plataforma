<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Usuario;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idalumno)
    {
        //
        $alumno=Alumno::findOrFail($idalumno);
        return view('alumno.home',compact('alumno'));
    }


    
    public function  estado1($idalumno)
    {
        //
       $alumno=Alumno::findOrFail($idalumno);
      //  return view('plantillas.plantilla',compact('alumno'));
      return view('alumno.estado.1',compact('alumno'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idalumno)
    {
        // 
        $alumno=Alumno::findOrFail($idalumno);
        $idusuario=$alumno->idusuario;
        $usuario=Usuario::findOrFail($idusuario); 
        return view('alumno.edit',compact('alumno','usuario')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idalumno)
    {
        //
           //donde se actualiza los datos  
           $alumno=Alumno::findOrFail($idalumno);
           $idusuario=$alumno->idusuario;
           $usuario=Usuario::findOrFail($idusuario);
           // actualizar los datos personales 
           $alumno->edad= $request->edad ;
           $alumno->cel =$request->cel ;
           $alumno->save();
           //actualizar usuario
           $usuario->usuario=$request->usuario;
           $usuario->contraseña=$request->show_password;
           $alumno->save(); 
           return redirect()->route('aula',$alumno->idalumno);
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
