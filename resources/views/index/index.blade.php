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
.body{
    background-color: #ffffff;
}
.main{
    background-color: #ffffff;
}
#layer1{
    background-color: #ffdfdf;
    
}
#header{ 
    
    width: 1000px;
    font-family:Arial, Helvetica, sans-serif;
}
ul, ol {
    list-style: none;

}

.nav li a {
    background-color: #DC143C;
    color:#fff;
    text-decoration:none;
    padding: 10px 15px;
    display:block;
}

.nav > li{
   float:left;
   
}
.nav li a:hover{
   background-color:#DC143C;

}

.nav li ul {
     display: none;
     position: absolute;
     min-width: 140px;
}

.nav li:hover > ul {
    display:block;
    
} 
.main h1{
  text-align: center;
}



    </style>
</head>
<body class="body">

    <nav class="navbar navbar-light" style="background-color: #DC143C;">
        <div class="container-fluid">
          
          <div>
          <a class="navbar-brand" href="/"><FONT COLOR="white">INICIO</FONT></a> 
            <ul class ="nav">
               <li><a href="#">Menú</a>             
                   <ul>
                       <li><a href="/">Inicio</a> </li>
                       <li><a href="/Recetas">Lista de Recetas</a> </li>                      
                  </ul> 
               </li>  
            </ul>
        </div>



        <! –– barra de busqueda se cambio "navbar navbar-light bg-light"por lo de abajo––>
      <nav class="container center w-50" >
              <div class="container-fluid">
                 <form class="d-flex">
                     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
              </div>
      </nav>


        </div>
      </nav>

      <main class="main">
        <br>
        <div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;"><h1>Recetas Saludables Para Niños</h1></div>
        
        <div class="container-md container-inline w-75  " id="layer1" style="height:450px; overflow-y: scroll;"><br>
        <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($recetas as $receta)
          <div class="col">
            <div class="card h-100 border border-dark">
            <a href="/Receta/{{$receta->id}}"><img src="images/{{$receta->ruta_imagen}}" class="card-img-top" alt="Imagen de Receta" style="width: 100%; max-height: 90%;"></a>
              <div class="card-body">
                <h5 class="card-title">{{$receta->nombre}}</h5>
              </div>
            </div>
          </div>
        @endforeach
        </div> <br>         
        </div><br>
      </main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>