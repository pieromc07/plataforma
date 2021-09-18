<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Alumno;
use App\Models\Director;
use App\Models\Tramite;
use Illuminate\Http\Request;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
    }

   
    public function create()
    {
        //
    }

    
    public function mistramites($idalumno)
    {
        //
        $alumno=Alumno::find($idalumno);
        $tramite=Tramite::where('idalumno','=',$idalumno)->get(); 
      return view('alumno.mistramites',compact('alumno','tramite'));
    }
    public function store(Request $request)
    {
        //
      
    }
    public function crear1(Request $request,$idalumno)
    {
        //
        $alumno=Alumno::find($idalumno);
        date_default_timezone_set('America/Lima');
        $tramite = new Tramite();
        $tramite->idalumno=$idalumno;
        $tramite->asunto=$request->select;
        $tramite->estado=1;
        $tramite->fecha=date("y-m-d");
        $tramite->comentario=$request->comentario; 
        $tramite->link=$request->link;
        $tramite->save();
        $idtramite= $tramite->idtramite;
        return redirect()->route('estado2',compact('idalumno','idtramite'));
    }
    public function estado2($idalumno,$idtramite)
    {
      
      
      
        $alumno=Alumno::findOrFail($idalumno);
        $tramite=Tramite::findOrFail($idtramite);
        $estado=$tramite->estado;
        $director=Director::findOrFail(1);
        $administrador=Administrador::findOrFail(1);
        if ($estado==1){
          return  view('alumno.estado.2',compact('alumno','tramite'));
        }else{
            if($estado==2){
                return  view('alumno.estado.3',compact('alumno','tramite','administrador'));
            } else{
                if($estado==3){
                    return  view('alumno.estado.4',compact('alumno','tramite','administrador','director'));   
                }  else{
                    return  view('alumno.estado.5',compact('alumno','tramite','administrador','director'));   
                }             
            }
        }


       
      
  
  
    }
    public function mostrarMisTramites($idtramite)
    {
        $tramite=Tramite::findOrFail($idtramite);
        $idalumno=$tramite->idalumno;
        $estado=$tramite->estado;
        $alumno=Alumno::findOrFail($idalumno);
        $administrador=Administrador::findOrFail(1);
        $director=Director::findOrFail(1);
        if ($estado==1){
            return  view('alumno.estado.2',compact('alumno','tramite'));
          }else{
              if($estado==2){
                  return  view('alumno.estado.3',compact('alumno','tramite','administrador'));
              } else{
                  if($estado==3){
                      return  view('alumno.estado.4',compact('alumno','tramite','administrador','director'));   
                  }  else{
                      return  view('alumno.estado.5',compact('alumno','tramite','administrador','director'));   
                  }             
              }
          }
      
    }





    public function estado3($idalumno,$idtramite, $idadministrador)
    {
        $alumno=Alumno::findOrFail($idalumno);
        $tramite=Tramite::findOrFail($idtramite);
        $administrador=Administrador::findOrFail($idadministrador);


        return  view('alumno.estado.3',compact('alumno','tramite', 'administrador'));//
    }

    public function estado4($idalumno,$idtramite, $iddirector)
    {
        $alumno=Alumno::findOrFail($idalumno);
        $tramite=Tramite::findOrFail($idtramite);
        $director=Director::findOrFail($iddirector);

        
        return  view('alumno.estado.4',compact('alumno','tramite', 'director'));//
    }

    public function estado5($idalumno,$idtramite)
    {
        $alumno=Alumno::findOrFail($idalumno);
        $tramite=Tramite::findOrFail($idtramite);
 

        
        return  view('alumno.estado.5',compact('alumno','tramite'));//
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
