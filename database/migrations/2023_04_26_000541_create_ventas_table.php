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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente'); /* Llave foranea de clientes */
            $table->date('FechaVenta') ->nullable(false); /* Campo que no puede estar vacio */
            $table->decimal('Total', 5,2) ->nullable(false); /* Campo que no puede estar vacio */;
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')-> on('clientes'); /* Refenciamos a la tabla */
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
