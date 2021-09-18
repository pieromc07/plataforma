@extends('plantillas.plantilla')
@section('contenido')

<h1>Nuevo Tramite</h1>
<div class="container">
 <div class="row">
        <div class="col-12">
            <div class="row">
                <div  class="col-2"  style="border: 4px solid black;background-color:#F1A743">Datos Documento </div>
                <div class="col-1"></div>
                <div  class="col-2"  style="border: 2px solid grey;"> <p>Verificar los datos y los pagos</p>  </div>
                <div class="col-1"></div>
                <div  class="col-2"  style="border: 2px solid grey;">  <p >Aprobacion o tramite</p>     </div>
                <div class="col-1"></div>
                <div  class="col-1"  style="border: 2px solid grey;">  <p>listo para entregar</p>     </div>
                <div class="col-1"></div>
                <div  class="col-1"  style="border: 2px solid grey; "> <p >Atendido</p>  </div>
                </div>
        </div>
            <div class="col-12">
                <br><br>
     <form action="{{route('crear1',$alumno->idalumno)}}" method="post">             
      @csrf
                  <label for="">Asunto del Documento:</label>   <br>
                    <select name="select">
                        <option value="AUTENTICACIÓN DE COPIA DIGITAL DE DIPLOMA DE GRADO ACADÉMICO DE   BACHILLER" selected>AUTENTICACIÓN DE COPIA DIGITAL DE DIPLOMA DE GRADO ACADÉMICO DE   BACHILLER</option>
                        <option value="AUTENTICACIÓN DE COPIA DIGITAL DE DIPLOMA DE TÍTULO PROFESIONAL" >AUTENTICACIÓN DE COPIA DIGITAL DE DIPLOMA DE TÍTULO PROFESIONAL</option>
                        <option value="AUTENTICACIÓN DE COPIA DIGITAL DE CONSTANCIAS ACADÉMICAS">AUTENTICACIÓN DE COPIA DIGITAL DE CONSTANCIAS ACADÉMICAS</option>
                        <option value="EMISIÓN DE DUPLICADO DE CARNÉ UNIVERSITARIO DE PREGRADO ">EMISIÓN DE DUPLICADO DE CARNÉ UNIVERSITARIO DE PREGRADO  </option>
                        <option value="OBTENCIÓN DE DIPLOMA DE GRADO ACADÉMICO DE BACHILLER CON SUSTENTACIÓN">OBTENCIÓN DE DIPLOMA DE GRADO ACADÉMICO DE BACHILLER CON SUSTENTACIÓN</option>
                    </select>    <br> <br>
                    <label for="">Usuario:</label>
                    <input type="text"   style="width:300px" name="apellido" disabled value="{{$alumno->apellido}}">                 
                    <input type="text"   style="width:300px" name="nombre" disabled value="{{$alumno->nombre}}">        
                    <br>
                    <label for="">Carrera:</label>
                    <input type="text" disabled name="carrera"  value="{{$alumno->escuela}}">
                 
                    <label for="">ciclo:</label>
                    <input type="text" name="ciclo" disabled  value="{{$alumno->ciclo}}"><br>
                    <label for="">Comentario:</label><br>
                    <textarea name="comentario"  cols="75" rows="2"></textarea>
                <br>   <label for="">Ingresar la direccion Web del Driver Con los datos Pedidos:</label><br>
                 
                    <textarea name="link"  cols="90" rows="1"></textarea> <br><br>
                  </div>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                              <tr  class="table-dark">
                                <th scope="col">#</th>
                                <th scope="col">REQUSITO</th>
                                <th scope="col">TIPO</th>
                                <th scope="col">MONTO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>NO TENER DEUDA CON LA UNIVERSIDAD </td>
                                <td>VERIFICAR PRE-CONDICIÓN(UNT)</td>
                                <td>0 SOLES </td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>PAGO POR AUTENTICACION DE COPIA DIGITAL</td>
                                <td>VERIFICAR PRE-CONDICIÓN(UNT)</td>
                                <td>50 SOLES</td>
                              </tr>
                            </tbody>
                          </table>

                          
                         <br><br><input type="submit" value="Grabar">
                         <button type="button" class="btn btn-danger">Cancelar</button>
                        </form>  
                   </div>  
 
 </div>
</div>
<script type="text/javascript">

    </script>    
@endsection