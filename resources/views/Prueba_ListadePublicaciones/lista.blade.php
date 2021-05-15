@extends('extenciones.adminGral')
@section('content')
<br>
        <div class="container-md w-50 "><h1>Lista De Publicaciones</h1></div>
        <div id="main-container" class="w-50 container-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                @foreach($recetas as $receta)
                <tr>
                    <td>{{$receta->nombre}}</td>
                    <td><a href="/Recetas/1/editar"><button href="/Recetas/1/editar"><i class="far fa-edit" ></i></button></a></td>
                    <td><button><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                @endforeach
            </table>
        </div>
        </div> <br>         
        </div><br>
@endsection