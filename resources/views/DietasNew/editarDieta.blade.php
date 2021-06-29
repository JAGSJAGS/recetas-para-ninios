@extends('extenciones.adminGral')
@section('content')

<div class="container w-75 center" style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>{{$dieta->name}}</h1></div>
<div class="container-md container-inline w-100">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Tipo</th>
        <th scope="col" style="text-align:center">Lunes</th>
        <th scope="col" style="text-align:center">Martes</th>
        <th scope="col" style="text-align:center">Miercoles</th>
        <th scope="col" style="text-align:center">Jueves</th>
        <th scope="col" style="text-align:center">Viernes</th>
        <th scope="col" style="text-align:center">Sábado</th>
        <th scope="col" style="text-align:center">Domingo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">Desayuno</th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Lunes') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Martes') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Miercoles') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Jueves') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Viernes') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Sábado') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Domingo') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        </tr>
        <tr>
        <th scope="row">Almuerzo</th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Lunes') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Martes') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Miercoles') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Jueves') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Viernes') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Sábado') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Domingo') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        </tr>
        <tr>
        <th scope="row">Cena</th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Lunes') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Martes') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Miercoles') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Jueves') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Viernes') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Sábado') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        <th><div class="card h-100 border border-dark">
        @foreach($dietaRecetas->where('dia','Domingo') as $dietaReceta)
        @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta)
            <form class="" method="POST" action="/DietasEliminar/{{$dietaReceta->id}}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="DELETE">@csrf
                    <div class="card-body">  {{$receta->nombre}} <button id="btnSubmit" class="btn btn-outline-danger form-control" type="submit">Eliminar</button> </div>
                </form>
        @endforeach 
        @endforeach
                
            </div>
        </th>
        </tr>
    </tbody>
    </table>   
</div><br>

<div class="container-md container-inline w-100">
<div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>Registrar Receta Para Edad: {{$dieta->edad}} años</h1></div>
    <br><br>
    <div class="container-fluid w-50">
        <form class="d-flex" method="POST" action="/AdminDietas/{{$dieta->id}}" enctype="multipart/form-data">
        @csrf
        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
            <input class="form-control me-2" type="search" name="Nombre" placeholder="Buscar Receta" aria-label="Search" list="lista" maxlength="40">
            <button type="submit" class="btn btn-outline-dark">Buscar</button>            
        </form><datalist id="lista">@yield('lista')</datalist>
    </div><br>

    <div class="container">
        <div class="row justify-content-center mt-7 pt-7">
            <form class="" method="POST" action="/FiltrarEditarDieta/{{$dieta->id}}" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col-md-2">
                    <br>
                    <h5>Busqueda Por Filtros:</h5>
                    </div>
                
                    <div class="col-md-3">
                        <label for="Calorias" class="col-form-label" required></label>
                        <select name="Calorias" class="form-control">
                            <option selected>Calorias</option>
                            <option value="100-200 cal">100-200 cal</option>
                            <option value="200-300 cal">200-300 cal</option>
                            <option value="300-400 cal">300-400 cal</option>
                            <option value="+400 cal">+400 cal</option>
                        </select>
                    </div>

                    <div class="col-md-3">
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
                       <button id="btnSubmit" class="btn btn-outline-dark form-control" type="submit">Filtrar</button>
                    </div>

                    <div class="col-md-2">
                    <br>
                    <button type="submit" class="btn btn-outline-danger form-control">Cancelar</button> 
                    </div>  
                </div>             
            </form>
        </div>            
    </div><br>
        
    <div class="container-md container-inline w-100 container-bordered" style="overflow-y: scroll;"><br>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($recetas2 as $receta2)
            <div class="col">
                <div class="card h-100 border border-dark">
                <h5>{{$receta2->tipo}}</h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta2->id}}" data-bs-whatever="@mdo">Ver {{$receta2->nombre}}</button> 

                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta2->id}}" data-bs-whatever="@mdo"><img src="/images/{{$receta2->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;"></a>
                    <form class="" method="POST" action="/RegistrarHorario/{{$dieta->id}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">  
                        <div class="">
                            <label for="Dia" class="col-form-label" required></label>
                            <h5>Seleccione Dia.</h5> 
                            <select name="Dia" class="form-control">
                                <option value="Lunes">Lunes</option>
                                <option value="Martes">Martes</option>
                                <option value="Miercoles">Miercoles</option>
                                <option value="Jueves">Jueves</option>
                                <option value="Viernes">Viernes</option>
                                <option value="Sábado">Sábado</option>
                                <option value="Domingo">Domingo</option>
                            </select>
                        </div>
                        <input type="hidden" name="Receta_id"value="{{$receta2->id}}">
                        <div>
                            <button id="btnSubmit" class="btn btn-outline-dark" type="submit">Seleccionar Dieta</button>                            
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <!-- Modal -->
                <div class="modal fade" id="staticBackdrop{{$receta2->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">{{$receta2->nombre}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                            <div class="card w-25" >
                                <div class="card-body">
                                <img src="/images/{{$receta2->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                                </div>
                            </div>
                            
                            <h5 class="card-title">Tipo de Receta</h5>
                            <div class="card w-25" >
                                <div class="card-body">
                                        <p class="card-text">{{$receta2->tipo}}</p>
                                </div>
                            </div>

                            <h5 class="card-title">Edad del niño</h5>
                            <div class="card w-25" >
                                <div class="card-body">
                                        <p class="card-text">{{$receta2->edad}}</p>
                                </div>
                            </div>

                            <h5 class="card-title">Ingredientes</h5>
                            <div class="card w-100">
                                <div class="card-body">
                                    <p class="card-text">{{$receta2->ingredientes}}</p>
                                </div>
                            </div>


                            <h5 class="card-title">Ingredientes Alternativos</h5>
                            <div class="card w-100">
                                    <div class="card-body">
                                        <p class="card-text">{{$receta2->ingredientes_alternativos}}</p>
                                    </div>
                            </div>

                            <h5 class="card-title">Preparado</h5>
                            <div class="card w-100">
                                    <div class="card-body">
                                        <p class="card-text">{{$receta2->pasos}}</p>
                                    </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
        </div> <br>         
    </div><br>
</div>





<br>
@endsection
