@extends('extenciones.usuarioGral')
@section('content')
<br>
         <br>
              
        
         <div class="container w-50 center" style = "font-family:Brush Script MT,arial,helvética;"><h1>Evaluacion Alimenticia</h1>
             </div>
        <div class="container w-50" id="evaluacionalim">
            <hr class="bg-info">
            @if(!$errors->isEmpty())
             <div class="alert alert-danger">
                 <p class="text-danger small pt-0 mt-0"><strong>Oops!</strong> Por favor arregle los errores</p>
                 <ul>
                 @foreach ($errors->all() as $error)
                      <li>{{($error)}}</li>  
                 @endforeach
             </div>
            @endif  
           
        <form class="" method="POST" action="/Evaluacion" enctype="multipart/form-data">
            @csrf
            <div class="row form-group">
                <label for="edad" class="col-form-label col-md-4" >Edad </label>
                <div class="col-md-8">
                    <select name="Edad" class="form-control">
                        <option value="">Selecciona Edad</option>
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
                    <input type="text" placeholder="cm" name="Altura" value="{{ old('Altura') }}"><br>

                </div>

            </div>
            <br>
            <div class="row form-group">
                <label for="genero" class="col-form-label col-md-4" >Genero </label>
                <div class="col-md-8">
                    <select name="Sexo" class="form-control">
                        <option value="">Selecciona Genero</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                        
                      </select>
                </div>

            </div>
            <br>
            <div class="row form-group">
                <label for="peso" class="col-form-label col-md-4">Peso </label>
                <div class="col-md-8">
                    <input type="text" name="Peso" value="{{ old('Peso') }}" placeholder="Kg">
                </div>
            </div>
            <br>
            
            <div class="container">
                <div class="row">
                <div class="col">
                        <a type="submit" class="btn btn-danger form-control btn-block"  href="/">Retornar Inicio</a></div>

                  <div class="col">
                    <button id="btnSubmit" class="btn btn-dark form-control btn-block" type="submit">Evaluar</button></div>
                </form>

            
              </div>
      
            </div>
            </div>     
    </div>
    <div>
        <h1 class="display-8" align="center">El estado del niño es :</h1>
        <h1 class="display-8" align="center">{{($result)}}  {{($im)}}</h1>

 @endsection
