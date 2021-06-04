@extends('extenciones.usuario')

@section('lista')
  @foreach($recetas2 as $receta)<option value="{{$receta->nombre}}"></option>@endforeach
@endsection
@section('content')




<! –– inicio cambios filtro para recetas ––>


Busqueda Por Filtros


<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Edad
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="#">1 año</a></li>
      <li><a class="dropdown-item" href="#">2 años</a></li>
      <li><a class="dropdown-item" href="#">3 años</a></li>
    </ul>
  </div>


<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Calorias
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="#">100 calorias</a></li>
      <li><a class="dropdown-item" href="#">200 calorias</a></li>
      <li><a class="dropdown-item" href="#">300 calorias</a></li>
      <li><a class="dropdown-item" href="#">400 calorias</a></li>
      <li><a class="dropdown-item" href="#">500 calorias</a></li>
    </ul>
  </div>
  


  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Tipo De Comida
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="#">Desayuno</a></li>
      <li><a class="dropdown-item" href="#">Almuerzo</a></li>
      <li><a class="dropdown-item" href="#">Cena</a></li>
      <li><a class="dropdown-item" href="#">Postre</a></li>
    </ul>
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