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
        Schema::create('provedores', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_del_provedor', 20) ->nullable(false); /* Campo que no puede estar vacio */
            $table->string('Direccion_de_la_empresa', 100) ->nullable(false); /* Campo que no puede estar vacio */
            $table->string('Numero_de_la_empresa', 10) ->nullable(false); /* Campo que no puede estar vacio */
            $table -> string('Correo_de_la_empresa', 100) ->nullable(false); /* Campo que no puede estar vacio */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provedores');
    }
};
