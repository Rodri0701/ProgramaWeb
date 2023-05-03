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
        Schema::create('detallesventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_venta');/*Llave foranea de la venta */
            $table->unsignedBigInteger('id_producto'); /*Llave foranea de la venta */
            $table->integer('CatidadVendida');
            $table -> decimal('Precio', 5,2);
            $table->timestamps();
                    /* Referenciamos la llaves con las tablas */
            $table->foreign('id_venta')->references('id')-> on('ventas');
            $table->foreign('id_producto')->references('id')-> on('productos');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallesventas');
    }
};
