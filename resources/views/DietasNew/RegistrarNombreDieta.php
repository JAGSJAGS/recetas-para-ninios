@section('content')


<h5 class="card-title">Registrar Dietas</h5>

<div class="card" style="width: 18rem;">
  <div class="card-body">



    <h5 class="card-title">Nombre de la dieta</h5>
    <! –– recuadrito para llenar ––>
    <div class="mb-3">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
          

    <h5 class="card-title">Edad a la que va dedicado la dieta</h5>
    
    <! –– boton desplegable ––>
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

     <! –– boton registrar ––>
     <button type="button" class="btn btn-outline-dark">Registrar</button>

  </div>
</div>



<div class="card-group">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">1 Año De Edad</h5>
    </div>
    <div class="card-footer">
        NombreDeLaDieta
      <button type="button" class="btn btn-outline-dark">Editar</button>
    </div>
    <div class="card-footer">
        NombreDeLaDieta
      <button type="button" class="btn btn-outline-dark">Editar</button>
    </div>
  </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">2 Años De Edad</h5>
    </div>
    <div class="card-footer">
        NombreDeLaDieta
      <button type="button" class="btn btn-outline-dark">Editar</button>
    </div>
    <div class="card-footer">
        NombreDeLaDieta
      <button type="button" class="btn btn-outline-dark">Editar</button>
    </div>
  </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">3 Años De Edad</h5>
    </div>
    <div class="card-footer">
        NombreDeLaDieta
      <button type="button" class="btn btn-outline-dark">Editar</button>
    </div>
    <div class="card-footer">
        NombreDeLaDieta
      <button type="button" class="btn btn-outline-dark">Editar</button>
    </div>
  </div>
@endsection