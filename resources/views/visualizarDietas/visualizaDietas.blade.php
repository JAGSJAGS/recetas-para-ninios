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
    <title>Visualizar Dieta</title>
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
                <h1 class="display-5" align="center">Dietas </h1>
            
            
        <form>
            
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Lunes</th>
                    <th scope="col">Martes</th>
                    <th scope="col">Miercoles</th>
                    <th scope="col">Jueves</th>
                    <th scope="col">Viernes</th>
                    <th scope="col">Sabado</th>
                    <th scope="col">Domingo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Desayuno</th>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td> 
                  </tr>
                  <tr>
                    <th scope="row">Almuerzo</th>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                  </tr>
                  <tr>
                    <th scope="row">Cena</th>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                    <td><img src="..." alt="..." class="img-thumbnail"></td>
                  </tr>
                </tbody>
              </table>
            
            
            
            
            
            

        </form>
            </div>
            
    </div>
      </main>
</body>
</html>