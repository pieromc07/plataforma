<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Alumno;
use App\Models\Tramite;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idadministrador)
    {

       $administrador=Administrador::findOrFail($idadministrador);
        return view('administrador.home',compact('administrador'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fase1($idadministrador)
    {
        $tramite=Tramite::where('estado','=','1')->get();
        $administrador=Administrador::findOrFail($idadministrador);
        return view('administrador.fase1',compact('administrador','tramite'));//
    }

    public function fase3($idadministrador)
    {
        $tramite=Tramite::where('estado','=','3')->get();
        $administrador=Administrador::findOrFail($idadministrador);
        return view('administrador.fase3',compact('administrador'),compact('tramite'));//
    }

 
    public function mostrarDocumento($idtramite)
    {
        
        $administrador=Administrador::findOrFail(1);
        $tramite=Tramite::findOrFail($idtramite);
        $alumno=Alumno::findOrFail($tramite->idalumno);
        return view('administrador.mostrar1',compact('administrador','tramite','alumno'));
    }

    public function mostrarDocumento2(Request $request,$idtramite)
    {
        //
        $tramite=Tramite::findOrFail($idtramite);
        $tramite->observacion1=$request->observacion;
        $tramite->estado=2; 
        $tramite->idadministrador=1;
        $tramite->save(); 
        $idadministrador=1;
        return redirect()->route('fase1',$idadministrador); 
    }
    // para la fase 3 
  
  
    public function fase3mostrarDocumento($idtramite)
    {
        
        $administrador=Administrador::findOrFail(1);
        $tramite=Tramite::findOrFail($idtramite);
        $alumno=Alumno::findOrFail($tramite->idalumno);
        return view('administrador.mostrar3',compact('administrador','tramite','alumno'));
    }

    public function fase3mostrarDocumento2(Request $request,$idtramite)
    {
        //
        $tramite=Tramite::findOrFail($idtramite);
        $tramite->estado=4; 
        $tramite->link2= $request->link;
        $tramite->save(); 
        $idadministrador=1;
       return redirect()->route('fase3',$idadministrador);
    }








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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
