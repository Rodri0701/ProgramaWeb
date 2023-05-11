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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProd',20)->nullable(false); /* Campo que no puede estar vacio */
            $table ->binary('Imagen') -> nullable(true);
            $table->longText('Sinopsis')->nullable(false); /* Campo que no puede estar vacio */
            $table->decimal('Precio', 5,2)->nullable(false); /* Campo que no puede estar vacio */
            $table->integer('Stock')->nullable(false); /* Campo que no puede estar vacio */
            $table->unsignedBigInteger('id_prov'); /* foreign key of provedores */
            $table->timestamps();
                        /*Reference to table  */
            $table ->foreign('id_prov')->references('id')->on('provedores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
