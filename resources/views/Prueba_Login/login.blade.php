@extends('extenciones.adminGral')
@section('content')
 
<div class="login-box">
   <h1>BIENVENIDO</h1>
<form method="POST" action="{{route('login')}}">
@csrf
   <label for="username">USUARIO </label><br>
   <input type="text" placeholder="Nombre de usuario" name="Usuario"><br>

   <label for="contraseña">CONTRASEÑA </label><br>
   <input type="password" placeholder="Ingrese contraseña" name="Contraseña"><br>
   <input type="submit" value="Iniciar Sesion">

</form>
</div>
@endSection