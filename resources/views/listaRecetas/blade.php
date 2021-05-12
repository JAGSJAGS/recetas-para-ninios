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
                       <li><a href="/">Lista de Recetas</a> </li>
                                            
                  </ul> 
               </li>
               <!--<a href="/">Cerrar Sesion</a> --> 
            </ul>
        </div>

        </div>
      </nav>
      
      <main class="main">
        <br>
        <div class="container w-50 center "><h1>Lista De Publicaciones</h1></div>
        <div id="main-container">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th><th>Modificar/Eliminar</th>
                    </tr>
                </thead>
                <tr>
                    <td>sal</td>
                    <td>
                        <button><i class="far fa-edit"></i></button>
                        <button><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>pam</td><td></td>
                </tr>
                <tr>
                    <td>manzana</td><td></td>
                </tr>
                <tr>
                    <td>sakj</td><td></td>
                </tr>
                <tr>
                    <td>yuguy</td><td></td>
                </tr>
                <tr>
                    <td>fsd</td><td></td>
                </tr>

            </table>
        </div>
        
        

        <!--<div class="container-md container-inline w-75 " id="layer1" style="height:450px; overflow: scroll;"><br>-->
        <!--<div class="row row-cols-1 row-cols-md-4 g-4">-->
        <!--@foreach($recetas as $receta)
          <div class="col">
            <div class="card h-100 border border-dark">
            <a href=""><img src="images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta"></a>
              <div class="card-body">
                <h5 class="card-title">{{$receta->nombre}}</h5>
              </div>
            </div>
          </div>
        @endforeach-->
        </div> <br>         
        </div><br>
    
      </main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>