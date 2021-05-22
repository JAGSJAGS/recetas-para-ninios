@extends('extenciones.usuario')

@section('lista')
  @foreach($recetas2 as $receta)<option value="{{$receta->nombre}}"></option>@endforeach
@endsection
@section('content')




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