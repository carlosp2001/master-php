<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('nombre', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->integer('edad');
            $table->integer('sueldo');
            $table->integer('salarios');
            $table->timestamps();


        });
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

    // Ejecutar todas las migraciones
    // php artisan migrate

    // Revertir cambios realizados por la migración
    // php artisan rollback
};
