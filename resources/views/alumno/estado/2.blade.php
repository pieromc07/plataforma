@extends('plantillas.plantilla')
@section('contenido')

<h1>{{ $tramite->asunto }}</h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
             <div  class="col-2"  style="border: 2px solid grey;">Datos Documento </div>
             <div class="col-1"></div>
             <div  class="col-2"  style="border: 4px solid black;background-color:#ECFF00"> <p>Verificar los datos y los pagos</p>  </div>
             <div class="col-1"></div>
             <div  class="col-2"  style="border: 2px solid grey;">  <p >Aprobacion o tramite</p>     </div>
             <div class="col-1"></div>
             <div  class="col-1"  style="border: 2px solid grey;">  <p>listo para entregar</p>     </div>
             <div class="col-1"></div>
             <div  class="col-1"  style="border: 2px solid grey; "> <p >Atendido</p>  </div>
            </div>
        </div>
    </div>

    <h1>DATOS</h1>
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

    <h1>FLUJO DE APROBACION</h1>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">NIVEL</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">ACCION</th>
            <th scope="col">ESTADO</th>
            <th scope="col">COMENTARIO</th>
           
          </tr>
        </thead>
        <tbody> 

          <tr>
                <td>1</td>
                <td>SECRETARIA GENERAL/MESA DE PARTES</td>
                <td>RECEPCIONAR Y VALIDAR DOCUMENTO</td>     
                <td><strong style="color: Red;">Pendiente</strong></td>  
                <td><strong style="color: Red;">Por Comentar</strong></td>      
        </tr>  
        <tr>
            <td>2</td>
            <td>DIRECTOR DE ESCUELA</td>
            <td>VALIDAR DOCUMENTO</td>     
            <td><strong style="color: Red;">Pendiente</strong></td>  
            <td><strong style="color: Red;">Por Comentar</strong></td>        
        </tr>  
        <tr>
            <td>3</td>
            <td>Secretaria</td>
            <td>Entraga de Documento</td>     
            <td><strong style="color: Red;">Pendiente</strong></td>  
            <td><strong style="color: Red;">Por Comentar</strong></td>    
        </tr>
        </tbody>
      </table>



</div>





<script type="text/javascript">

    </script>    
@endsection