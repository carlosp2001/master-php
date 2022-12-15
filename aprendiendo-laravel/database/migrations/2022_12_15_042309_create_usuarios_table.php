<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('usuarios', function (Blueprint $table) {
//            //
//            $table->increments('id');
//            $table->string('nombre', 255);
//            $table->string('email', 255);
//            $table->string('password', 255);
//            $table->integer('edad');
//            $table->integer('sueldo');
//            $table->integer('salarios');
//            $table->timestamps();
//
//
//        });

        // Crear migración con sql


        DB::statement("create table usuarios(
            id int(255) auto_increment not null,
        nombre varchar(255),
        email varchar(255),
        password varchar(255),
        PRIMARY KEY(id)
    );");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
    // Crear migración
    // php artisan make:migration create_usuarios_table --table=usuarios

    // Ejecutar todas las migraciones
    // php artisan migrate

    // Revertir cambios realizados por la migración
    // php artisan rollback

    // Actualizar cambios hechos en la db
    // pho artisan migration:refresh
};
