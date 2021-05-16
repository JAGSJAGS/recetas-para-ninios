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
        /**Schema::create('usuario', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table->bigInteger('telefono');
            $table->softDeletes();
            $table->timestamps();
        });
        DB::table("usuario")
        ->insert([
            "nombre" => "administrador",
            "telefono" => "12345678",
            "apellido" => "administra",
            "correo" => "administrador@gmail.com",
        ]);*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('receta');
        //Schema::drop('usuario');
        Schema::dropIfExists('users');
    }
}