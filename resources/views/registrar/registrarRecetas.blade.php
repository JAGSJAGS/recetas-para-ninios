@extends('extenciones.adminGral')
@section('content')
<br>
<div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>Registrar Recetas</h1></div>
  
<div class="container-md container-inline w-50">
    <br><br> 
    @if(!$errors->isEmpty())
         <div class="alert alert-danger">
         <p><strong>Oops!</strong> Por favor arregle los errores</p>
         <ul>
          @foreach ($errors->all() as $error)
            <li>{{($error)}}</li>  
          @endforeach
         </div>
    @endif  
      <form class="container w-75 " method="POST" action="Registrar" enctype="multipart/form-data">
      @csrf

      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre:</label>
        <div class="col-sm-10">
          <input class="form-control" name="Nombre" rows="1" maxlength="40" value="{{ old('Nombre') }}">
          </div>
      </div><br><br>
      
      <div class="mb-4">
        <label for="formFileSm" class="form-label"><a><img class="container w-50" src="icons/agregarImagen.png" width="”10”" width="50%" height="50%"></a></label>
        <input class="form-control form-control-sm" name="imagen" id="formFileSm" type="file" accept='image/*'  value="{{old('imagen')}}">
      </div>
      
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Ingredientes:</label>
          <textarea class="form-control" name="Ingredientes" maxlength="1000" rows="4">{{ old('Ingredientes') }} </textarea>
      </div>

      <div class="row mb-3">
        <label for="inputPassword3" class="col col-form-label">Edad(maximo 3 años):</label>
          <input class="form-control" name="Edad" rows="1" maxlength="1"  value="{{ old('Edad') }}">
      </div>

      <div class="row mb-3">
        <label for="inputPassword3" class="col col-form-label">Ingredientes Alternativos:</label>
          <textarea class="form-control" name="IngredientesAlternativos" maxlength="1000" rows="4">{{ old('IngredientesAlternativos') }} </textarea>
      </div>

      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Pasos:</label>
          <textarea class="form-control" name="Pasos" rows="8" maxlength="3000" >{{ old("Pasos") }} </textarea>
      </div>
      
      <div class="row mb-3">
        <div class="col-sm-9"><a type="submit" class="btn btn-danger"  href="/">Retornar Inicio</a></div>
        <div class="col-sm-3"><button type="submit" class="btn btn-dark ">Registrar</button></div>          
      </div>
        
      
      
    </form><br>
  
  </div><br>
  @endsection