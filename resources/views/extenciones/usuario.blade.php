<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Recetas Para Niños - @yield('title')</title>

    <style>
        * {
    padding: 0px;
    margin: 0px;  
}
.body{
    min-height: 100vh;
    background: url(/images/wallpaper1.jpg)
}
.main{
 
}
#layer1{
    background-color: rgba(255, 220, 220,0.6);
    width:75%;
    height:60vh;  
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

.card{
    background:none;
    border:none;
}

#filtro{
    background:white;
    padding: 0px 0px 20px 30px;
}

#listadietas{
    background:rgba(255, 255, 255, 0.8);
}

#contenidodietas{
    background:rgba(255, 255, 255, 0.8);
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
                       <li><a href="/Evaluacion">Evaluación Alimenticia</a> </li>
                       <li><a href="/Dietas">Dietas</a> </li>
                       <li><a href="/Recomendaciones">Recomendaciones</a> </li>                  
                  </ul> 
               </li>  
            </ul>
        </div><br ><br><br>



        <! –– barra de busqueda se cambio "navbar navbar-light bg-light"por lo de abajo––>
        <nav class="container center w-50" >
              <div class="container-fluid">
                 <form class="d-flex" method="POST" action="/" enctype="multipart/form-data">
                 @csrf
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                     <input class="form-control me-2" type="search" name="Nombre" placeholder="Buscar Receta" aria-label="Search" list="lista" maxlength="40">
                     <button type="submit" class="btn btn-outline-light">Buscar</button>
                     
                </form><datalist id="lista">@yield('lista')</datalist>
                
              </div>
      </nav>
        </div>
      </nav>

      <main class="main">
        @yield('content')
      </main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>