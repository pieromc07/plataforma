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
             <div  class="col-2"  style="border: 2px solid grey; "> <p>Verificar los datos y los pagos</p>  </div>
             <div class="col-1"></div>
             <div  class="col-2"  style="border: 2px solid grey;">  <p >Aprobacion o tramite</p>     </div>
             <div class="col-1"></div>
             <div  class="col-1"  style="border: 2px solid grey;">  <p>listo para entregar</p>     </div>
             <div class="col-1"></div>
             <div  class="col-1"  style="border: 4px solid black;background-color:#00ff37"> <p  style="color:black">Atendido</p>  </div>
            </div>
        </div>
    </div>
<br>
<br>


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
    <label for="">Comentario del Estudiante: </label>
    <input type="text"   disabled   value="{{ $tramite->comentario }}">
    <br>

    <h1>  <strong style="color: blue;">   link Del documento Entregado: </strong></h1>
    <a href="{{$tramite->link2}}"  >{{$tramite->link2}}</a>
    <br><br>
    
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
                <td><strong style="color: blue;">Aprobado</strong> </td>
                <td>{{$tramite->observacion1}}</td>     
        </tr>  
        <tr>
            <td>2</td>
            <td>DIRECTOR DE ESCUELA</td>
            <td>VALIDAR DOCUMENTO</td>     
            <td><strong style="color: blue;">Aprobado</strong> </td>
            <td>{{$tramite->observacion2}}</td>    
        </tr>  
        <tr>
            <td>3</td>
            <td>SECRETARIA</td>
            <td>ENTREGA DE DOCUMENTO</td>     
            <td><strong style="color: blue;">Aprobado</strong> </td>
            <td><strong style="color: Red;">no Comentado</strong></td>      
        </tr>
        </tbody>
      </table>

      <h1>Datos de la Secretaria  encargada de verificar:</h1>
      <table class="table">
       <thead class="thead-dark">
         <tr>        
           <th scope="col">ID</th>
           <th scope="col">CARGO</th>
           <th scope="col">APELLIDO</th>
           <th scope="col">NOMBRE</th>
           <th scope="col">COMENTARIO</th>
          
         </tr>
       </thead>
       <tbody> 
   
         <tr>
               <td>{{ $administrador->idadministrador }}</td>
               <td>{{ $administrador->cargo }}</td>
               <td>{{ $administrador->apellido }}</td>     
               <td>{{ $administrador->nombre }}</td>
               <td>{{ $tramite->observacion1}}</td>      
       </tr>  
       </tbody>
     </table>
   <h1>Datos del Director de escuela</h1>
      <table class="table">
       <thead class="thead-dark">
         <tr>        
           <th scope="col">ID</th>
           <th scope="col">NOMBRE</th>
           <th scope="col">observacion</th>
          
         </tr>
       </thead>
       <tbody> 
   
         <tr>
               <td>{{ $director->iddirector }}</td>
               <td>{{ $director->nombre }}</td>
               <td>{{ $tramite->observacion2 }}</td>
       </tr>  
       </tbody>
     </table>

</div>





<script type="text/javascript">

    </script>    
@endsection