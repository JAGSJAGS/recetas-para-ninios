@extends('extenciones.adminGral')
@section('content')

<div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>Horario: {{$dieta->name}}</h1></div>
<div class="container w-75">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Tipo</th>
        <th scope="col">Lunes</th>
        <th scope="col">Martes</th>
        <th scope="col">Miercoles</th>
        <th scope="col">Jueves</th>
        <th scope="col">Viernes</th>
        <th scope="col">Sábado</th>
        <th scope="col">Domingo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">Desayuno</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <th scope="row">Almuerzo</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <th scope="row">Cena</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
    </tbody>
    </table>   
</div><br>

<div div class="container-md container-inline w-100">
<div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>Registrar Receta</h1></div>
    <br><br>
    <div class="container-fluid w-50">
        <form class="d-flex" method="POST" action="/IndexAdmin" enctype="multipart/form-data">
        @csrf
        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
            <input class="form-control me-2" type="search" name="Nombre" placeholder="Buscar Receta" aria-label="Search" list="lista" maxlength="40">
            <button type="submit" class="btn btn-outline-dark">Buscar</button>            
        </form><datalist id="lista">@yield('lista')</datalist>
    </div><br>

    <div class="container">
        <div class="row justify-content-center mt-7 pt-7">
            <form class="" method="POST" action="/Filtrar" enctype="multipart/form-data">
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
    </div><br>
        
    <div class="container-md container-inline w-100 container-bordered" style="overflow-y: scroll;"><br>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($recetas as $receta)
            <div class="col">
                <div class="card h-100 border border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button> 
                <a href="/Receta/{{$receta->id}}"><img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;"></a>
                    <div class="card-body">         
                        <div class="">
                            <label for="Tipo" class="col-form-label" required></label>
                            <select name="Tipo" class="form-control">
                                <option selected>Dia</option>
                                <option value="Lunes">Lunes</option>
                                <option value="Martes">Almuerzo</option>
                                <option value="Miercoles">Miercoles</option>
                                <option value="Jueves">Jueves</option>
                                <option value="Viernes">Viernes</option>
                                <option value="Sábado">Sábado</option>
                                <option value="Domingo">Domingo</option>
                            </select>
                        </div>
                        <div>
                            <button id="btnSubmit" class="btn btn-outline-dark" type="submit">Registrar Receta</button>                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    <h5 class="card-title">Edad del niño</h5>
                            <div class="card w-25" >
                                <div class="card-body">
                                        <p class="card-text">{{$receta->edad}}</p>
                                </div>
                            </div>


                            <h5 class="card-title">Ingredientes</h5>
                            <div class="card w-100">
                                <div class="card-body">
                                    <p class="card-text">{{$receta->ingredientes}}</p>
                                </div>
                            </div>


                            <h5 class="card-title">Ingredientes Alternativos</h5>
                            <div class="card w-100">
                                    <div class="card-body">
                                        <p class="card-text">{{$receta->ingredientes_alternativos}}</p>
                                    </div>
                            </div>

                            <h5 class="card-title">Preparado</h5>
                            <div class="card w-100">
                                    <div class="card-body">
                                        <p class="card-text">{{$receta->pasos}}</p>
                                    </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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