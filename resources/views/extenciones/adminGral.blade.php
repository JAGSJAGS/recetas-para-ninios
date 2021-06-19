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
.login-box {
    width: 420px;
    height: 440px;
    background: rgb(230,230, 250);
    

    margin: 100px auto;
}
.login-box h1 {
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 50px;
}

.login-box label {
    margin: 20;
    padding: 0;
    font-weight: bold;
    display:block;
}

.login-box input {
    width: 100%;
    margin-bottom: 40px;
}

.login-box input[type="text"],
.login-box input[type="password"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: #fff;
    outline: none;
    height: 30px;
    color: #000000;
    font-size: 20px;
}

.login-box input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    background: #DC143C;
    color: #fff;
    font-size: 20px;
    border-radius: 20px;
}
.body{
    min-height: 100vh;
    background: url(/images/wallpaper1.jpg)
}
.main{

}
#layer1{
    background-color: #ffdfdf;
    color:#000000;
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

.card p[class="card-text"]{
    background:#fff;   
    border: 1px solid black;
    padding: 7px;
}

.container-md{
    background:rgba(255, 255, 255, 0.8);
}
textarea{
    resize:none;
}


    </style>
</head>
<body class="body">

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
                       <li><a href="/AdminDietas">Dieta</a> </li>                     
                  </ul> 
               </li>  
            </ul>
        </div>


      <div><FONT COLOR="white">{{ Auth::user()->name }}</FONT><br><a href="/CerrarSeción"><FONT COLOR="white">Cerrar Sesión</FONT></a></div>
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