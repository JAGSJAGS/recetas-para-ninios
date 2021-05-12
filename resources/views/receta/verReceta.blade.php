<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Recetas Para Niños</title>

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
            <ul class ="nav">
               <li><a href="#">Menú</a>             
                   <ul>
                       <li><a href="/">Inicio</a> </li>
                       <li><a href="/Registrar">Registrar Receta</a> </li>                      
                  </ul> 
               </li>  
            </ul>
        </div>
        
        </div>
      </nav>
      
      <main class="main">
        <br>
        <div class="container w-50 center "><h1>{{$receta->nombre}}</h1></div>





        <IMG>aqui creo q se hace referencia a la imagen </IMG>

<h5 class="card-title">Ingredientes</h5>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">aqui van los ingredientes</p>
  </div>
</div>

<h5 class="card-title">edad</h5>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">aqui va la edad</h6>

  </div>
</div>

<h5 class="card-title">Ingredientes alternativos</h5>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">aqui van los ingredientes alternativos de la receta</p>
  </div>
</div>

<h5 class="card-title">Preparado</h5>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">hacer referencia a la base de datos para recuperar el preparado de la 
    recetaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaas
    ecetaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    ecetaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
  </div>
</div>



  </div>
  <button type="button" class="btn btn-success">Retornar Al Menu</button>
  <div>
    



</main>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>