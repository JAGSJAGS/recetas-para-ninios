<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <script src="https://kit.fontawesome.com/422fbc7bfc.js" crossorigin="anonymous"></script>




    <title>Lista De Recetas</title>

    <style>
        * {
    padding: 0px;
    margin: 0px;  
}
.main{
    background-color: #EAFDEA;
}
#layer1{
    background-color: #EAFDEA;
}
#header{ 
    
    width: 1000px;
    font-family:Arial, Helvetica, sans-serif;
}
ul, ol {
    list-style: none;

}

.nav li a {
    background-color: #198754;
    color:#fff;
    text-decoration:none;
    padding: 10px 15px;
    display:block;
}

.nav > li{
   float:left;
   
}
.nav li a:hover{
   background-color:#154830;

}

.nav li ul {
     display: none;
     position: absolute;
     min-width: 140px;
}

.nav li:hover > ul {
    display:block;
    
} 
    </style>
</head>
<body>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        
        <div class="container-fluid">
        
          <div>
          <a class="navbar-brand" href="/">INICIO</a>
          <a class="navbar-brand" href="/">Cerrar Sesion</a>
           
            <ul class ="nav">
               <li><a href="#">Menú</a>
                
                                
                   <ul>
                       <li><a href="/">Inicio</a> </li>
                       <li><a href="Registrar">Registrar receta</a> </li>
                       <li><a href="/Recetas">Lista de Recetas</a> </li>
                                            
                  </ul> 
               </li>
               <!--<a href="/">Cerrar Sesion</a> --> 
            </ul>
        </div>

        </div>
      </nav>
      
      <main class="main">
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
    
      </main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>