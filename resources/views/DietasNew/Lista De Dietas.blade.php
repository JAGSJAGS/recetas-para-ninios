@extends('extenciones.usuario')
@section('content')
<br>
<div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>Lista de Dietas</h1></div> 
<div class="container w-50 card-group" id="listadietas">
  <div class="card">
  <div class="card-body" id="edadd">
      <h5 class="card-title">1 AÑO DE EDAD</h5>
    </div>
    @foreach ($dietas->where('edad',1) as $dieta)
    <div class="card-footer" id="contenidodietas">
      <div class="col-sm-9"><a type="submit" class="btn btn-outline-dark"  href="/Dieta/{{$dieta->id}}">{{$dieta->name}}</a></div>
    </div>
    @endforeach
  </div>


  <div class="card">
  <div class="card-body" id="edadd">
      <h5 class="card-title">2 AÑOS DE EDAD</h5>
    </div>
    @foreach ($dietas->where('edad',2) as $dieta)
    <div class="card-footer" id="contenidodietas">
      <div class="col-sm-9"><a type="submit" class="btn btn-outline-dark"  href="/Dieta/{{$dieta->id}}">{{$dieta->name}}</a></div>
    </div>
    @endforeach
  </div>


  <div class="card">
  <div class="card-body" id="edadd">
      <h5 class="card-title">3 AÑOS DE EDAD</h5>
    </div>
    @foreach ($dietas->where('edad',3) as $dieta)
    <div class="card-footer" id="contenidodietas">
      <div class="col-sm-9"><a type="submit" class="btn btn-outline-dark"  href="/Dieta/{{$dieta->id}}">{{$dieta->name}}</a></div>
    </div>
    @endforeach
  </div>
</div>
@endsection
