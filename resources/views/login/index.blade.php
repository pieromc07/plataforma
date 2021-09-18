<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
</head>
<body>
    <section>
    
        <div class="row ">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/img/img-1.jpg" class="d-md-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold"  >SOMOS TU MEJOR OPCIÓN </h5>
                          <a class="text-muted text-decoration-none"></a>
                        </div>
                      </div>
    
                      <div class="carousel-item ">
                         <img src="img/img-2.jpg" class="d-md-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold" style="color:black">YA ES HORA</h5>
                          <a class="text-muted text-decoration-none" style="color:black">De pertenecer a esta gran familia </a>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="col-lg-5 bg-dark d-flex flex-column align-items-end min-vh-100">
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                <h1 class="font-weight-bold mb-4" style="color:#E3E2DE">Registro Documentario de la Univeridad Nacional de Trujillo</h1>
                <form class="mb-5" method="POST" action="{{route('verficar')}}" >
                  @csrf
                          <div class="mb-4">
                            <label class="form-label font-weight-bold" style="color:#E3E2DE">Usuario</label>
                            <input type="text"  class="form-control  border-0 @error('name') is-invalid @enderror"  aria-describedby="emailHelp" name="name" value="{{old('name')}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
    
                          </div>
                          <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label font-weight-bold" style="color: #E3E2DE">Contraseña</label>
    
                            <input type="password" class="form-control  border-0 mb-2   @error('password') is-invalid @enderror" name="password" value="{{old('password')}}" >
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
    
                          </div> 
                          <button type="submit" class="btn btn-primary w-100" value="Ingresar">Iniciar sesión</button>
                        
                  </form>
                  <div class="row">
                    
                     <div class="row justify-content col-12 "  style=" width:800px;height:200px;border:3px solid #B1B1B1;border-radius:22px;background-color:#E3E2DE;padding:9px;">
                      <div class="col-12"> <h4 style="color:black">El usuario:adming</h4>
                       <h4 style="color:black">La contraseña:12345</h4> 
                       <p style="color:black">El usuario adming se llama Carlos Isaac Haro Polo que es un estudiante  </p>
                      </div>  
                     
                   
                    </div>
                  </div>
                </div>
    
    
                </div>
          
            </div>
        </div>
        
      </div>
    
    
    
      </section>
</body>
</html>