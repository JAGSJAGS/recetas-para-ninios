
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
textarea {
    resize: none;
} 
.main h2{
  text-align: center
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
                       <li><a href="Registrar">Registrar receta</a> </li>                      
                  </ul> 
               </li>  
            </ul>
        </div>

        </div>
      </nav>


      <main class="main">        
      <br>
      <div class="container w-25 center"><h2>Editar Receta</h2></div><br>

        <div class="container-md container-inline bg-light w-50 border border-success">

          <br><br>
          @if(session('mensaje'))
          <div class="alert alert-success" role="alert"><h4>Registro Exitoso</h4> </div>
         @endif

            <form class="container w-75 " method="POST" action="Registrar" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                  <input class="form-control" name="Nombre" required rows="1" minlength="5" maxlength="40">
                </div>
              </div><br><br>
              <div class="mb-4">
                <label for="formFileSm" class="form-label"><a><img class="container w-50" src="icons/agregarImagen.png" width="”10”" width="50%" height="50%"></a></label>
                <input class="form-control form-control-sm" name="imagen" required id="formFileSm" type="file" accept='image/*'  >
              </div><br><br>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Ingredientes:</label>
              <div class="col-sm-1"></div>
              <div class="col-sm-9">
                <textarea class="form-control" name="Ingredientes" rows="4" required minlength="5" maxlength="1000"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Edad(maximo 3 años):</label>
              <div class="col-sm-1"></div>
              <div class="col-sm-9">
                <input class="form-control" name="Edad" rows="1" required pattern="[1-3]+"  minlength="1" maxlength="1">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Ingredientes Alternativos:</label>
              <div class="col-sm-1"></div>
              <div class="col-sm-9">
                <textarea class="form-control" name="IngredientesAlternativos" rows="4"  maxlength="1000"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Pasos:</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="Pasos" rows="8" required minlength="5" maxlength="3000"></textarea>
              </div>
            </div><br>
            
            <div class="row mb-3">
            <div class="col-sm-9"><a type="submit" class="btn btn-success"  href="/">Retornar Inicio</a></div>
            <div class="col-sm-3"><button type="submit" class="btn btn-primary ">Registrar</button></div>          
            </div>
              
            
            
          </form><br>
        
        </div><br><br>
      </main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>