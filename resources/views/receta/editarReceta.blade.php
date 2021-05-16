@extends('extenciones.adminGral')
@section('content')
<br>
      <div class="container w-25 center" style = "font-family:Brush Script MT,arial,helvética;"><h1>Editar Receta</h1></div>

        <div class="container-md container-inline bg-light w-50">

          <br><br>
          @if(session('mensaje'))
          <div class="alert alert-dark" role="alert"><h4>Actualización Exitosa</h4> </div>
         @endif

            <form class="container w-75 " method="POST" action="/Receta/{{$receta->id}}" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                  <input class="form-control" name="Nombre" value="{{$receta->nombre}}" required rows="1" minlength="5" maxlength="40">
                </div>
              </div><br><br>
              <div class="">
                <label for="formFileSm" class="form-label">
                  <div class="card bg-primary text-black">
                    <img src="/images/{{$receta->ruta_imagen}}" class="card-img" alt="Imagen de Receta""...">
                    <div class="card-img-overlay">
                    <h5 class="card-title" ></h5>
                    </div>
                  </div>
                </label>
                <input class="form-control form-control-sm" name="imagen" id="formFileSm" type="file" accept='image/*' >
              </div><br><br>

            
            <div class="row mb-3">
             <label for="inputPassword3">Edad(maximo 3 años):</label>
             <p><input class="form-control" name="Edad" rows="1" value="{{$receta->edad}}" required pattern="[1-3]+"  minlength="1" maxlength="1"></p>
            </div>

            <div class="row mb-3">
              <label for="inputPassword3" >Ingredientes:</label>
                <p><textarea class="form-control" name="Ingredientes" rows="10" required minlength="5" maxlength="1000">{{$receta->ingredientes}}</textarea></p>
            </div>

            <div class="row mb-3">
              <label for="inputPassword3">Ingredientes Alternativos:</label>
              <p><textarea class="form-control" name="IngredientesAlternativos" rows="10" maxlength="1000">{{$receta->ingredientes_alternativos}}</textarea></p>
            </div>

            <div class="row mb-3">
              <label for="inputPassword3" >Pasos:</label>
              <p><textarea class="form-control" name="Pasos" rows="10" required minlength="5" maxlength="3000">{{$receta->pasos}}</textarea></p>
            </div><br>
            
            <div class="row mb-3">
            <div class="col-sm-9"><a type="submit" class="btn btn-danger"  href="/Recetas">Retornar Lista</a></div>
            <div class="col-sm-3"><button type="submit" class="btn btn-dark ">Actualizar</button></div>          
            </div>
              
            
            
          </form><br>
        
        </div><br><br>
@endsection