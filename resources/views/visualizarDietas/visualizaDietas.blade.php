@extends('extenciones.usuarioGral')
@section('content')
<br>
<div class="container w-75 center" style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>{{$dieta->name}}</h1></div>
<div class="container-md container-inline w-100">
    <table class="table">
    <thead>
        <tr></tr>
    </thead>
    <tbody>
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
        <tr>
        <th scope="row">Desayuno</th>
        <th>
            @foreach($dietaRecetas->where('dia','Lunes') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>    
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">                     
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Martes') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>       
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Miercoles') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                                 
                        <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                        
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Jueves') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                                 
                        <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                        
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Viernes') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                                 
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                        
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Sábado') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                              
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Domingo') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Desayuno') as $receta) 
                <div class="card h-100 border border-dark">
                  <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                                 
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        
        </tr>
        <tr>

        </tr>
        <tr>
        <th scope="row">Almuerzo</th>
        <th>
            @foreach($dietaRecetas->where('dia','Lunes') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                              
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Martes') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                               
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Miercoles') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                              
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Jueves') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                              
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Viernes') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                              
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Sábado') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                               
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Domingo') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Almuerzo') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                              
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>
              @endforeach
            @endforeach        
        </th>
        </tr>
        <tr>
        
        </tr>
        <tr>
        <th scope="row">Cena</th>
        <th>
            @foreach($dietaRecetas->where('dia','Lunes') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>    
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">                     
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Martes') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>       
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Miercoles') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                                 
                        <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                        
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Jueves') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                                 
                        <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                        
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Viernes') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                                 
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                        
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Sábado') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta) 
                <div class="card h-100 border border-dark">
                    <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                              
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        <th>
            @foreach($dietaRecetas->where('dia','Domingo') as $dietaReceta)
              @foreach($recetas->where('id',$dietaReceta->receta_id)->where('tipo','Cena') as $receta) 
                <div class="card h-100 border border-dark">
                  <div class="card-body">
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$receta->id}}" data-bs-whatever="@mdo">Ver {{$receta->nombre}}</button>
                                 
                      <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                      
                    </div> 
                </div>

                <div class="modal fade" id="staticBackdrop{{$receta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$receta->nombre}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="card w-25" >
                            <div class="card-body">
                            <img src="/images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; height: 20vh;">
                            </div>
                          </div>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endforeach        
        </th>
        </tr>
    </tbody>
    </table>   
</div><br>
 @endsection
