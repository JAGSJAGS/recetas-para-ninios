<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Receta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->smallInteger('edad');
            $table->longText('ingredientes');
            //$table->longText('ingredientes_alternativos');
            $table->longText('ingredientes_alternativos')->nullable();
            $table->longText('pasos');
            $table->string('ruta_imagen');
            $table->string('tipo');
            $table->string('calorias');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('dieta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
            $table->smallInteger('edad');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('dietaReceta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('receta_id');
            $table->unsignedBigInteger('dieta_id');
            $table->foreign('receta_id')->references('id')->on('receta')->onDelete('cascade');
            $table->foreign('dieta_id')->references('id')->on('dieta');
            $table->string('dia');
            $table->softDeletes();
            $table->timestamps();
        });
        DB::table("receta")
        ->insert([
            "nombre" => "Galletas de Quinua",
            "edad" => "2",
            "ingredientes" => "ingredientes",
            "ingredientes_alternativos" => "ingredientes_alternativos",
            "pasos"=>"pasos",
            "ruta_imagen"=>"GalletaQuinoa.jpg",
            "tipo"=>"tipo",
            "calorias"=>"calorias"

        ]);
        DB::table("receta")
        ->insert([
            "nombre" => "Papilla de Durazno",
            "edad" => "2",
            "ingredientes" => "ingredientes",
            "ingredientes_alternativos" => "ingredientes_alternativos",
            "pasos"=>"pasos",
            "ruta_imagen"=>"PapillaDurazno.jpg",
            "tipo"=>"tipo",
            "calorias"=>"calorias"

        ]);
        DB::table("receta")
        ->insert([
            "nombre" => "Papilla de Manzana",
            "edad" => "2",
            "ingredientes" => "ingredientes",
            "ingredientes_alternativos" => "ingredientes_alternativos",
            "pasos"=>"pasos",
            "ruta_imagen"=>"papillaManzana.jpg",
            "tipo"=>"tipo",
            "calorias"=>"calorias"

        ]);
        DB::table("receta")
        ->insert([
            "nombre" => "Pankeke de Platano",
            "edad" => "2",
            "ingredientes" => "ingredientes",
            "ingredientes_alternativos" => "ingredientes_alternativos",
            "pasos"=>"pasos",
            "ruta_imagen"=>"Pankekes.jpg",
            "tipo"=>"tipo",
            "calorias"=>"calorias"

        ]);

        DB::table("receta")
        ->insert([
            "nombre" => "Pure de Verduras",
            "edad" => "2",
            "ingredientes" => "ingredientes",
            "ingredientes_alternativos" => "ingredientes_alternativos",
            "pasos"=>"pasos",
            "ruta_imagen"=>"pureDeVerduras.jpg",
            "tipo"=>"tipo",
            "calorias"=>"calorias"

        ]);

        DB::table("receta")
        ->insert([
            "nombre" => "Gelatina de Pata",
            "edad" => "2",
            "ingredientes" => "ingredientes",
            "ingredientes_alternativos" => "ingredientes_alternativos",
            "pasos"=>"pasos",
            "ruta_imagen"=>"gelatinaDePata.jpg",
            "tipo"=>"tipo",
            "calorias"=>"calorias"

        ]);
        /**Schema::create('usuario', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table->bigInteger('telefono');
            $table->string('contrasena');
            $table->softDeletes();
            $table->timestamps();
        });
        DB::table("usuario")
        ->insert([
            "nombre" => "administrador",
            "telefono" => "12345678",
            "apellido" => "administra",
            "correo" => "administrador@gmail.com",
            "contrasena"=>"admin123"
        ]);
=======
        ]);*/


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dietaReceta');
        Schema::drop('dieta');
        Schema::drop('receta');
        //Schema::drop('usuario');
        Schema::dropIfExists('users');
    }
}