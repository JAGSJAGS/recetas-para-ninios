@extends('extenciones.admin')

@section('lista')
  @foreach($recetas2 as $receta)<option value="{{$receta->nombre}}"></option>@endforeach
@endsection
@section('content')




<! –– inicio cambios filtro para recetas ––>
<div class="container">
  <div class="row justify-content-center mt-7 pt-7">
      <form class="" method="POST" action="/FiltrarAdmin" enctype="multipart/form-data">
        @csrf
        <div class="row form-group">

          <div class="col-md-2">
          <br>
            <h5>Busqueda Por Filtros:</h5>
          </div>

          <div class="col-md-2">
            <label for="Edad" class="col-form-label" required></label>
              <select name="Edad" class="form-control">
                  <option selected>Edad</option>
                  <option value="1">1 año</option>
                  <option value="2">2 años</option>
                  <option value="3">3 años</option>
              </select>              
          </div>
          
          <div class="col-md-2">
            <label for="Calorias" class="col-form-label" required></label>
              <select name="Calorias" class="form-control">
                  <option selected>Calorias</option>
                  <option value="100-200 cal">100-200 cal</option>
                  <option value="200-300 cal">200-300 cal</option>
                  <option value="300-400 cal">300-400 cal</option>
                  <option value="+400 cal">+400 cal</option>
              </select>
          </div>

          <div class="col-md-2">
            <label for="Tipo" class="col-form-label" required></label>
              <select name="Tipo" class="form-control">
                  <option selected>Tipo de Comida</option>
                  <option value="Desayuno">Desayuno</option>
                  <option value="Almuerzo">Almuerzo</option>
                  <option value="Cena">Cena</option>
              </select>
          </div>

          <div class="col-md-2">
          <br>
            <button id="btnSubmit" class="btn btn-dark form-control" type="submit">Filtrar</button>
          </div>

          <div class="col-md-2">
          <br>
            <button type="submit" class="btn btn-outline-danger">Cancelar</button> 
          </div>  

        </div>             
      </form>
  </div>            
</div>

<! –– fin cambios filtro para recetas ––>

<br>
        <div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;"><h1>Recetas Saludables Para Niños</h1></div>
        
        <div class="container-md container-inline" id="layer1" style="overflow-y: scroll;"><br>
        <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($recetas as $receta)
          <div class="col">
            <div class="card h-100 border border-dark">
            <a href="/Receta/{{$receta->id}}"><img src="images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;"></a>
              <div class="card-body">
                <h5 class="card-title">{{$receta->nombre}}</h5>
              </div>
            </div>
          </div>
        @endforeach
        </div> <br>         
        </div><br>

        @endsection
