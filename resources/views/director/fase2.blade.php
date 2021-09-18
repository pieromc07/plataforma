@extends('director.home')
@section('contenido')
<h1>Aprobar o Negar Documentos </h1>


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Cod del Trámite</th>
        <th scope="col">Asunto</th>
        <th scope="col">Fecha de Registro</th>
        <th scope="col">Escuela</th>
        <th scope="col">N° Matricula</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Nombres</th>
        <th scope="col">Estado</th>
        <th scope="col">Ver</th>
       
      </tr>
    </thead>
    <tbody> 

   
    @foreach($tramite as $item )
      <tr>
            <td>{{$item->idtramite}}</td>
            <td>{{$item->asunto}}</td>     
            <td>{{$item->fecha}}</td>
            <td>Ingenieria de Sistemas</td> 


            <td>{{$item->alumno->matricula}}</td> 
            <td>{{$item->alumno->apellido}}</td>   
            <td>{{$item->alumno->nombre}}</td>


            <td>{{$item->estado}}</td>  <i class="fa fa-weibo" aria-hidden="true"></i>
            
            <td>  <a href="{{route('DmostrarDocumento',$item->idtramite)}}">    <img src="/img/11.png" style="height: 30px">   </a>       </td>    
         
        </tr> 
    @endforeach
 
   
    </tbody>
  </table>


@endsection