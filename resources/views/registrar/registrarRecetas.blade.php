@extends('extenciones.adminGral')
@section('content')
<br>
<div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>Registrar Recetas</h1></div>
  <div class="container-md container-inline bg-light w-50 "id="layer1">
    <br><br>

   @if(session('mensaje'))
    <div class="alert alert-success" role="alert" style="background-color: #585858;"><h4><FONT COLOR="white">Registro Exitoso</h4> </div>
   @endif

      <form class="container w-75 " method="POST" action="Registrar" enctype="multipart/form-data">
      @csrf

      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre:</label>
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
          <input class="form-control" name="Nombre" rows="1" required pattern="[A-Z a-z]+"  minlength="5" maxlength="40">
        </div>
      </div><br><br>
      
      <div class="mb-4">
        <label for="formFileSm" class="form-label"><a><img class="container w-50" src="icons/agregarImagen.png" width="”10”" width="50%" height="50%"></a></label>
        <input class="form-control form-control-sm"  required name="imagen" id="formFileSm" type="file" accept='image/*' size="20KB" >
      </div><br><br>
      
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Ingredientes:</label>
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
          <textarea class="form-control" name="Ingredientes" rows="4" required minlength="5" maxlength="1000"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Edad(maximo 3 años):</label>
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
          <input class="form-control" name="Edad" rows="1" required pattern="[1-3]+"  minlength="1" maxlength="1">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Ingredientes Alternativos:</label>
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
          <textarea class="form-control" name="IngredientesAlternativos" rows="4"  maxlength="1000"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Pasos:</label>
        <div class="col-sm-9">
          <textarea class="form-control" name="Pasos" rows="8" required minlength="5" maxlength="3000"></textarea>
        </div>
      </div><br>
      
      <div class="row mb-3">
      <div class="col-sm-9"><a type="submit" class="btn btn-danger"  href="/">Retornar Inicio</a></div>
      <div class="col-sm-3"><button type="submit" class="btn btn-dark ">Registrar</button></div>          
      </div>
        
      
      
    </form><br>
  
  </div><br><br>
  @endsection