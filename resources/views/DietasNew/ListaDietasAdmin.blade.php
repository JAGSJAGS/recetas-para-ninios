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

    <form class="container w-75 " method="POST" action="/RegistrarDietas" enctype="multipart/form-data">
      @csrf

      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre:</label>
        <div class="col-sm-10">
          <input class="form-control" name="Nombre" rows="1" maxlength="40" value="{{ old('Nombre') }}">
          </div>
      </div><br><br>

      <div class="row form-group">
                <label for="Edad" class="col-form-label col-md-4" >Edad a quien va dedicado la dieta: </label>
                <div class="col-md-8">
                    <select name="Edad" class="form-control">
                        <option value="">Edad</option>
                        <option value="1">1 año</option>
                        <option value="2">2 años</option>
                        <option value="3">3 años</option>
                    </select>
                </div>           
      </div><br>

      <div class="row mb-3">
        <div class="col-sm-9"></div>
        <div class="col-sm-3"><button type="submit" class="btn btn-dark ">Registrar</button></div>          
      </div>
    </form><br>
  
</div><br><br>


<<<<<<< HEAD
<div class="container w-50 card-group">
=======
<div class="container w-50 card-group" id="listadietas">
>>>>>>> be44029b82a3a4349a0601d294660eb779d10c9e
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">1 Año De Edad</h5>
    </div>
    @foreach ($dietas->where('edad',1) as $dieta)
<<<<<<< HEAD
    <div class="card-footer">
=======
    <div class="card-footer" id="contenidodietas">
>>>>>>> be44029b82a3a4349a0601d294660eb779d10c9e
      <div class="col-sm-9"><a type="submit" class="btn btn-outline-dark"  href="/AdminDietas/{{$dieta->id}}">{{$dieta->name}}</a></div>
    </div>
    @endforeach
  </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">2 Año De Edad</h5>
    </div>
    @foreach ($dietas->where('edad',2) as $dieta)
<<<<<<< HEAD
    <div class="card-footer">
=======
    <div class="card-footer" id="contenidodietas">
>>>>>>> be44029b82a3a4349a0601d294660eb779d10c9e
      <div class="col-sm-9"><a type="submit" class="btn btn-outline-dark"  href="/AdminDietas/{{$dieta->id}}">{{$dieta->name}}</a></div>
    </div>
    @endforeach
  </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">3 Año De Edad</h5>
    </div>
    @foreach ($dietas->where('edad',3) as $dieta)
<<<<<<< HEAD
    <div class="card-footer">
=======
    <div class="card-footer" id="contenidodietas">
>>>>>>> be44029b82a3a4349a0601d294660eb779d10c9e
      <div class="col-sm-9"><a type="submit" class="btn btn-outline-dark"  href="/AdminDietas/{{$dieta->id}}">{{$dieta->name}}</a></div>
    </div>
    @endforeach
  </div>
</div>
@endsection