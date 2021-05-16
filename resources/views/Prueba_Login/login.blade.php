@extends('extenciones.adminGral')
@section('content')
 
<div class="login-box">
   <h1>BIENVENIDO</h1>
<form>
   <label for="username">USUARIO </label><br>
   <input type="text" placeholder="  Nombre de usuario"><br>

   <label for="contraseña">CONTRASEÑA </label><br>
   <input type="password" placeholder="  Ingrese contraseña"><br>
   <input type="submit" value="Iniciar Sesion">

</form>
</div>
@endSection