<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Director;
use App\Models\Tramite;
class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $director=Director::findOrFail('1');
        return view('director.home',compact('director'));
     

    }


    public function fase2($iddirector)
    {
        $tramite=Tramite::where('estado','=','2')->get();
        $director=Director::findOrFail($iddirector);
        return view('director.fase2',compact('director'),compact('tramite'));//
    }

    public function DmostrarDocumento($idtramite)
    {
        
        $director=Director::findOrFail(1);
        $tramite=Tramite::findOrFail($idtramite);
        $alumno=Alumno::findOrFail($tramite->idalumno);
        return view('director.mostrar2',compact('director','tramite','alumno'));
    }

    public function DmostrarDocumento2(Request $request,$idtramite)
    {
        //
        $tramite=Tramite::findOrFail($idtramite);

        $tramite->observacion2=$request->observacion;
        $tramite->estado=3;
        $tramite->save(); 
        $idadministrador=1;
       return redirect()->route('fase2',$idadministrador);

       
    }




    public function create()
    {
        //
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
