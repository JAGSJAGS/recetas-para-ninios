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
    background-color: #fff;
    color: black;
}
#layer1{
    background-color: #fff;
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

    </style>
</head>
<body>

    <nav class="navbar navbar-light" style="background-color: #DC143C;">
        <div class="container-fluid">
          
          <div>
          <a class="navbar-brand" href="/"><FONT COLOR="white">INICIO</a> 
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
        <div class="container w-50 center "style = "font-family:Brush Script MT,arial,helvética;text-align:center"><h1>{{$receta->nombre}}</h1></div>

<div class="container-md container-inline bg-light w-75" style="padding:40px 100px ;">


            <div class="card bg-primary w-50 text-black">
                    <img src="/images/{{$receta->ruta_imagen}}" class="card-img" alt="Imagen de Receta""...">
                <div class="card-img-overlay">
                     <h5 class="card-title" >nombre de la receta??</h5>
                </div>
            </div>
            <br><br>

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
<br>
                <div>
                            <button type="button" class="btn btn-danger" >Retornar</button>
                    <div class="col-sm-9"><a type="submit" class="btn btn-success"  href="/">Retornar Inicio</a></div>

                </div>


 </div>

</main>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>