@extends('extenciones.usuario')
@section('content')
<br>
<div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>Sugerencia de Dietas</h1></div> 
<div class="container w-50 card-group" id="listadietas">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">1 Año De Edad</h5>
    </div>
    @foreach ($dietas->where('edad',1) as $dieta)
    <div class="card-footer" id="contenidodietas">
      <div class="col-sm-9"><a type="submit" class="btn btn-outline-dark"  href="/Dieta/{{$dieta->id}}">{{$dieta->name}}</a></div>
    </div>
    @endforeach
  </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">2 Año De Edad</h5>
    </div>
    @foreach ($dietas->where('edad',2) as $dieta)
    <div class="card-footer" id="contenidodietas">
      <div class="col-sm-9"><a type="submit" class="btn btn-outline-dark"  href="/Dieta/{{$dieta->id}}">{{$dieta->name}}</a></div>
    </div>
    @endforeach
  </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">3 Año De Edad</h5>
    </div>
    @foreach ($dietas->where('edad',3) as $dieta)
    <div class="card-footer" id="contenidodietas">
      <div class="col-sm-9"><a type="submit" class="btn btn-outline-dark"  href="/Dieta/{{$dieta->id}}">{{$dieta->name}}</a></div>
    </div>
    @endforeach
  </div>
</div>
@endsection
