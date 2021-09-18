@extends('administrador.home')
@section('contenido')
 <h1>Datos para verificar </h1> 
  <div>
   <label for="">Codigo del Documento: </label>
   <input type="text"  disabled value="{{ $tramite->idtramite }}">
   <br>
   <label for="">Asunto: </label>
   <input type="text"  disable value="{{ $tramite->asunto }}" size="70px">
   <br>
   <label for="">Nro de Matricula: </label>
   <input type="text"  disabled value="{{ $alumno->matricula }}">
   <br>
   <label for="">Estudiante: </label>
   <input type="text" disabled  value="{{ $alumno->apellido }} {{ $alumno->nombre }}" size="25px">
   <br>
   <label for="">Ciclo:  </label>
   <input type="text" disabled  value="{{ $alumno->ciclo }}" size="25px">
   <br>
 
   <label for="">Facultad: </label>
   <input type="text"  disabled value="Ingenieria">
   <br>
   <label for="">Carrera: </label>
   <input type="text"    disabled   value="Ingenieria de Sistemas">
   <br>
   <label for="">Fecha de Registro: </label>
   <input type="text"   disabled   value="{{$tramite->fecha}}">
   <br>

   <label for="">Estado: </label>
   <input type="text"  disabled   value="{{ $tramite->estado }}">
   <br>
   <br>
   <label for="">Comentario del Estudiante: </label> <br>
   <input type="text"   disabled   value="{{ $tramite->comentario }}">
   <br>

   <h3>  <strong style="color: blue;" >   link del driver (estan los archivos necesarios para el tramite) : </strong></h3>
   <a href="{{$tramite->link}}"  >{{$tramite->link}}</a>
   <br><br>
   

  </div>




 <form action="{{route('mostrarDocumento2',$tramite->idtramite)}}" method="post">
    @method('PUT')
    @csrf
   
  
   
     <br> <br>  
        <label for="">observacion:</label><br>
        <textarea name="observacion"  cols="75" rows="2"></textarea>


  
        <br><br><input type="submit"  class="btn btn-success" value="Aceptar">
        <button type="button" class="btn btn-danger">Rechazar</button>
   </form>

@endsection