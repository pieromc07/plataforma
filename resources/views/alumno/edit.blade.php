@extends('plantillas.plantilla')
@section('contenido')

<form method="POST" action="{{route('alumno.update',$alumno->idalumno)}}">

    @method('PUT')
     @csrf
    <h1>Actualizar datos Del Alumno </h1>
  <div class="row">


       <div class="form-group col-6">
        <label for="">FACULTAD:</label>
        <input type="text" readonly class="form-control " id="" name ="" value="{{$alumno->facultad}} ">
       </div>  
       <div class="form-group col-6">
        <label for="">ESCUELA:</label>
        <input type="text" readonly class="form-control " id="" name ="" value="{{$alumno->escuela}} ">
       </div>  
       <div class="form-group col-2">
        <label for="">Año de ingreso:</label>
        <input type="text" readonly class="form-control " id="" name ="" value="{{$alumno->año_ingreso}} ">
       </div>  
       <div class="form-group col-2">
        <label for="">ciclo:</label>
        <input type="text" readonly class="form-control " id="" name ="" value="{{$alumno->ciclo}} ">
       </div>  
  <div class="col-8"></div>
       <div class="form-group col-5">
        <label for="">Apellido y nombre :</label>
        <input type="text" readonly class="form-control " id="" name ="" value="{{$alumno->apellido}} {{$alumno->nombre}}">
       </div>
       <div class="col-4"></div>
    <div class="form-group col-4">
        <label for="">Matricula:</label>
        <input type="int"  readonly class="form-control " id="dni" name ="dni" value="{{$alumno->matricula}}">
    </div>
     <div class="form-group col-4">
        <label for="">edad:</label>
        <input type="int" class="form-control " id="edad" name ="edad" value="{{$alumno->edad}}">
    </div>

   
    <div class="form-group col-4">
                <label for="">Cel:</label>
                <input type="int" class="form-control " id="cel" name ="cel" value="{{$alumno->cel}}">
     </div>
  </div>
   
  <h2>Editar Datos de La cuenta:</h2>
  <div class="row">
 <div class="col-3"></div>
  <div class="row justify-content col-5 "  style=" width:500px;height:200px;border:3px solid #B1B1B1;border-radius:22px;background-color:#E3E2DE;padding:9px;">
        <div class="form-group col-12">
            <label for="">usuario:</label>
            <input type="int" class="form-control " id="usuario" name ="usuario" value="{{$usuario->usuario}}">
         </div>
         <div class="col-12">
            <label>Contraseña Actual</label>
            <div class="input-group">
                <input ID="txtPassword"  value="{{$usuario->contraseña}}" type="Password" Class="form-control" value="la">
                <div class="input-group-append">
                        <button id="show_password" name="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                </div>
            </div>
        </div>
       
    </div> 
    <div class="col-4"></div>
    <div class="col-12"><br><br></div>
    <div class="col-4"></div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
        <a href="{{route('aula',$alumno->idalumno)}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar </a>
  </div>
  
   
  
</form>
</div>
<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña

});


</script> 

@endsection