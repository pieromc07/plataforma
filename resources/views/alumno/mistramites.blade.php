@extends('plantillas.plantilla')
@section('titulo','MisTramites')
@section('contenido')
    <h2>Mis Trámites</h2>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col" style="border-style: solid">
                <h5>Estados del Documento</h5>
                <div class="row" style="border: 1px solid">
                    <div class="col">
                     
                       
                        Datos Verificados  <br>
                        Aprobado <br>
                        Listo Para Entregar <br>
                        Atendido <br>
                           Borrado <br>  
                    </div>
                    <div class="col">
                        <div class="row" style="height: 24px ; width: 170px; background: #ECFF00"></div>
                        <div class="row" style="height: 24px ; width: 170px; background: #2D39F7"></div>
                        <div class="row" style="height: 24px ; width: 170px; background: #E157E8"></div>
                        <div class="row" style="height: 24px ; width: 170px; background: #70E938"></div>
                          <div class="row" style="height: 24px ; width: 170px; background: #DC3545"></div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col"><input type="search" class="form-control" placeholder="Buscar Trámite" aria-label="Search"></div>
            <div class="col-1"><button type="button" class="btn btn-dark">Buscar</button></div>
        </div>
    </div><br>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Trámite</th>
            <th scope="col">Escuela</th>
            <th scope="col">Estado</th>
            <th scope="col">Comentario</th>
            <th scope="col">Fecha de Registro</th>
            <th scope="col">Ver Trámite</th>
          </tr>
        </thead>
        <tbody> 
        @foreach($tramite as $item )
          <tr>
                <td>{{$item->asunto}}</td>
                <td>Ing de Sistema</td>     
                <td>{{$item->estado}}    </div> </td>
                <td>{{$item->comentario}}</td> 
    
    

                <td>{{$item->fecha}}</td>  
                
                <td>  <a href="{{route('mostrarMisTramites',$item->idtramite)}}">    <img src="/img/11.png" style="height: 30px">   </a>       </td>    
             
            </tr> 
        @endforeach
     
       
        </tbody>
      </table>

    
@endsection