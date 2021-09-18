<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Alumno;
use App\Models\Director;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('login.index');
    }
    public function salir()
    {
        Auth::logout();
        return redirect('/');
    }
    public function verficar(Request $request){
        //return dd($request->all());

     $name=$request->get('name');
     $query=Usuario::where('usuario','=',$name)->get();
     
     if($query->count()!=0){
         $hashp=$query[0]->contraseña; // entraga contraseña del usuario consultado
        $password=$request->get('password');
        // esto es para la consulta 
           $consulta=Alumno::where('idusuario','=',$query[0]->idusuario)->get();  
           $consulta2=Administrador::where('idusuario','=',$query[0]->idusuario)->get();
           $consulta3=Director::where('idusuario','=',$query[0]->idusuario)->get();
           //----------
        if($hashp== $password){
            if( $consulta->count()!=0){
             //alumno 
            $idalumno=$consulta[0]->idalumno;
            
           
            return redirect()->route('aula',compact('idalumno'));
            }else{
                    if ( $consulta2->count()!=0){
                        $idadministrador=$consulta2[0]->idadministrador;
                        return redirect()->route('inicio2',compact('idadministrador'));
                    } else{
                        return redirect()->route('inicio3');
                    } 
            }
      }
      else
      {
         return back()->withErrors(['password'=>'Contraseña no válida'])->withInput(request(['name','password']));
      }

     }else{
         return back()->withErrors(['name'=>'Usuario no valido'])->withInput(request(['name']));
     }      
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
