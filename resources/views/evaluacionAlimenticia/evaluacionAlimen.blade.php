@extends('extenciones.usuarioGral')
@section('content')
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
 @endsection
