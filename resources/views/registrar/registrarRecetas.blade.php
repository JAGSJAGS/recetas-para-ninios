<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Recetas Para Niños</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
          
          <div>
          <a class="navbar-brand" href="/">INICIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menú
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        </div>
      </nav>
      <br>
      <div class="container w-25 center"><h2>Registrar Recetas</h2></div>

      <main class="">

        <div class="container-md container-inline bg-light w-50 border">

          <br><br>
          <form class="container w-75" method="POST" action="Registrar" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre:</label>
              <div class="col-sm-10">
                <input class="form-control" name="Nombre" rows="3">
              </div>
            </div><br><br>
            
            <div class="mb-4">
              <label for="formFileSm" class="form-label"><a><img class="container w-50" src="icons/agregarImagen.png" width="”10”" width="50%" height="50%"></a></label>
              <input class="form-control form-control-sm" name="imagen" id="formFileSm" type="file">
            </div><br><br>

            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Ingredientes:</label>
              <div class="col-sm-1"></div>
              <div class="col-sm-9">
                <textarea class="form-control" name="Ingredientes" rows="4"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Ingredientes Alternativos:</label>
              <div class="col-sm-1"></div>
              <div class="col-sm-9">
                <textarea class="form-control" name="IngredientesAlternativos" rows="4"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Pasos:</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="Pasos" rows="8"></textarea>
              </div>
            </div><br>
              
            <div class="container center w-25"><button type="submit" class="btn btn-primary ">Registrar</button></div>
            
          </form><br>

      </main><br><br>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>