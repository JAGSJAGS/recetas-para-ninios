@extends('extenciones.adminGral')
@section('content')
<br>
      <div class="container w-25 center"><h2>Editar Receta</h2></div><br>

        <div class="container-md container-inline bg-light w-50 border border-success">

          <br><br>
          @if(session('mensaje'))
          <div class="alert alert-success" role="alert"><h4>Registro Exitoso</h4> </div>
         @endif

            <form class="container w-75 " method="POST" action="Registrar" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                  <input class="form-control" name="Nombre" required rows="1" minlength="5" maxlength="40">
                </div>
              </div><br><br>
              <div class="mb-4">
                <label for="formFileSm" class="form-label"><a><img class="container w-50" src="icons/agregarImagen.png" width="”10”" width="50%" height="50%"></a></label>
                <input class="form-control form-control-sm" name="imagen" required id="formFileSm" type="file" accept='image/*'  >
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
            <div class="col-sm-9"><a type="submit" class="btn btn-success"  href="/">Retornar Inicio</a></div>
            <div class="col-sm-3"><button type="submit" class="btn btn-primary ">Registrar</button></div>          
            </div>
              
            
            
          </form><br>
        
        </div><br><br>
@endsection