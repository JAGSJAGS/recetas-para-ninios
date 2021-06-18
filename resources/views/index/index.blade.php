@extends('extenciones.usuario')

@section('lista')
  @foreach($recetas2 as $receta)<option value="{{$receta->nombre}}"></option>@endforeach
@endsection
@section('content')




<! –– inicio cambios filtro para recetas ––>
<div class="container">
  <div class="row justify-content-center mt-7 pt-7">
      <form>
        <div class="row form-group">

          <div class="col-md-2">
          <br>
            <h5>Busqueda Por Filtros:</h5>
          </div>

          <div class="col-md-2">
            <label for="edad" class="col-form-label" required></label>
              <select class="form-control">
                  <option selected>Edad</option>
                  <option value="1">1 año</option>
                  <option value="2">2 años</option>
                  <option value="3">3 años</option>
              </select>              
          </div>
          
          <div class="col-md-2">
            <label for="calorias" class="col-form-label" required></label>
              <select class="form-control">
                  <option selected>Calorias</option>
                  <option value="1">100-200 cal</option>
                  <option value="2">200-300 cal</option>
                  <option value="3">300-400 cal</option>
                  <option value="4">+400 cal</option>
              </select>
          </div>

          <div class="col-md-2">
            <label for="tipo" class="col-form-label" required></label>
              <select class="form-control">
                  <option selected>Tipo de Comida</option>
                  <option value="1">Desayuno</option>
                  <option value="2">Almuerzo</option>
                  <option value="3">Cena</option>
              </select>
          </div>

          <div class="col-md-2">
          <br>
            <button type="submit" class="btn btn-outline-dark">Filtrar</button> 
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
            <a href="/UReceta/{{$receta->id}}"><img src="images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;"></a>
              <div class="card-body">
                <h5 class="card-title">{{$receta->nombre}}</h5>
              </div>
            </div>
          </div>
        @endforeach
        </div> <br>         
        </div><br>

@endsection