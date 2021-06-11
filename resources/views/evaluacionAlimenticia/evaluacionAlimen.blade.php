<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvaluacionSalud</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #DC143C;">
        <div class="container-fluid">
          
          <div>
          <a class="navbar-brand" href="/IndexAdmin"><FONT COLOR="white">INICIO</FONT></a> 
            <ul class ="nav">
               <li><a href="#">Menú</a>             
                   <ul>
                       <li><a href="/IndexAdmin">Inicio</a> </li>
                       <li><a href="/Recetas">Lista de Recetas</a> </li>
                       <li><a href="/Registrar">Registrar Receta</a> </li>
                       <li><a href="/">Registrar Dieta</a> </li>                      
                  </ul> 
               </li>  
            </ul>
        </div>
        <nav class="container center w-50">
            <div class="container-fluid">
                <form class="d-flex" method="POST" action="/IndexAdmin" enctype="multipart/form-data">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                <input class="form-control me-2" type="search" name="Nombre" placeholder="Buscar Receta" aria-label="Search" list="lista" maxlength="40">
                <button type="submit" class="btn btn-outline-light">Buscar</button>

                </form>
            </div>

        </nav>


      <div><FONT COLOR="white">{{ Auth::user()->name }}</FONT><br><a href="/CerrarSeción"><FONT COLOR="white">Cerrar Sesión</FONT></a></div>
        </div>
      </nav>
    <main class="main">
        <br>
         <br>
              
        <div class="container">
            <div class="row justify-content-center mt-7 pt-7">
                <h1 class="display-5" align="center">Evaluacion Alimenticia</h1>
            <hr class="bg-info">
            <p class="text-danger small pt-0 mt-0">*Todos los campos son obligatorios</p>
        <form>
            <div class="row form-group">
                <label for="edad" class="col-form-label col-md-4" required>Edad </label>
                <div class="col-md-8">
                    <select class="form-control">
                        <option selected>Selecciona Edad</option>
                        <option value="1">1 año</option>
                        <option value="2">2 años</option>
                        <option value="3">3 años</option>
                      </select>
                </div>
            
            </div>
            <br>
            <div class="row form-group">
                <label for="altura" class="col-form-label col-md-4">Altura </label>
                <div class="col-md-8">
                    <input type="text" placeholder="cm" required><br>

                </div>

            </div>
            <br>
            <div class="row form-group">
                <label for="genero" class="col-form-label col-md-4" required>Genero </label>
                <div class="col-md-8">
                    <select class="form-control">
                        <option selected>Selecciona Genero</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                        
                      </select>
                </div>

            </div>
            <br>
            <div class="row form-group">
                <label for="peso" class="col-form-label col-md-4">Peso </label>
                <div class="col-md-8">
                    <input type="text" placeholder="Kg" required>
                </div>
            </div>
            <br>
            
            <div class="container">
                <div class="row">
                  <div class="col">
                    <button class="btn btn-danger form-control  btn-block" routerLink='/login'>Retornar Inicio</button></div>
                  <div class="col">
                    <button id="btnSubmit" class="btn btn-success form-control btn-block" type="submit" (click)="onSubmit()">Evaluar</button></div>
                </div>
              </div>
            
            
            

        </form>
            </div>
            
    </div>
    <div>
        <h1 class="display-8" align="center">El estado del niño es :</h1>
    </div>
      </main>
</body>
</html>