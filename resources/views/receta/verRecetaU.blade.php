@extends('extenciones.usuarioGral')
@section('content')
<br>
        <div class="container w-50 center "style = "font-family:Brush Script MT,arial,helvética;"><h1>{{$receta->nombre}}</h1></div>

<div class="container-md container-inline bg-light w-50">
<br><br>
<form class="container w-75 ">
            <div class="card bg-primary text-black">
                    <img src="/images/{{$receta->ruta_imagen}}" class="card-img" alt="Imagen de Receta""...">
                <div class="card-img-overlay">
                     <h5 class="card-title" >{{$receta->nombre}}</h5>
                </div>
            </div>
            <br><br>

            <h5 class="card-title">Edad del niño</h5>
            <div class="card w-25" >
                <div class="card-body">
                         <p class="card-text">{{$receta->edad}}</p>
                 </div>
            </div>


            <h5 class="card-title">Ingredientes</h5>
            <div class="card w-100">
                  <div class="card-body">
                      <p class="card-text">{{$receta->ingredientes}}</p>
                  </div>
            </div>


            <h5 class="card-title">Ingredientes Alternativos</h5>
            <div class="card w-100">
                    <div class="card-body">
                         <p class="card-text">{{$receta->ingredientes_alternativos}}</p>
                    </div>
            </div>

            <h5 class="card-title">Preparado</h5>
            <div class="card w-100">
                    <div class="card-body">
                        <p class="card-text">{{$receta->pasos}}</p>
                    </div>
            </div>
<br>   
                    <div class="col-sm-9"><a type="submit" class="btn btn-danger"  href="/">Retornar</a></div>
                    </form><br>

 </div><br><br>
 @endsection