<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table -> string('Nombres',20);
            $table -> string('Apellidos',20) ->nullable(); /* Campo que puede ser vacio */
            $table -> string('NombreUsuario' , 15)->nullable(false); /* Que no puede ir vacio */
            $table -> string('NumeroCelular',10) ->nullable(false); /* Que no puede ir vacio */
            $table -> string('Correo',50)->nullable(false); /* Que no puede ir vacio */
            $table -> string('Contraseña', 20)->nullable(false); /* Que no puede ir vacio */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
