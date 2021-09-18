@extends('administrador.home')
@section('contenido')
 <h2>Datos del Tramite </h2> 
 <h1>-------------- </h1> 
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

  </div>


 <h1>-------------- </h1> 
 <h1>Listo para enviar el documento</h1>
 <form action="{{route('fase3mostrarDocumento2',$tramite->idtramite)}}" method="post">
    @method('PUT')
    @csrf
   
  
    <label for="">Comentario(alumno):</label><br>
    <input type="text"  style="width:500px"   disabled value="{{$tramite->comentario}}"> <br>
    <label for="">observacion(Secretaria):</label><br>
    <input type="text"  style="width:500px"   disabled value="{{$tramite->observacion1}}"> <br>
    <label for="">observacion(Director de escuela):</label><br>
    <input type="text"  style="width:500px"   disabled value="{{$tramite->observacion1}}">
     <br> <br>  
      
        <label for="">link del documento pedido:</label><br>
        <textarea name="link"  cols="90" rows="1"></textarea>

       

        <br><br><input type="submit"  class="btn btn-success" value="Enviar">
        <button type="button" class="btn btn-danger">Cancelar</button>
   </form>

@endsection