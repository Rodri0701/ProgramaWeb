<?php

namespace Database\Seeders;

use App\Models\productos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Producto extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producto = new productos();

        $producto -> NombreProd = "asf";
        $producto -> Sinopsis = "asfsdaf";
        $producto -> Precio = 800;
        $producto -> Stock = 10;
        $producto -> id_prov = 1;
        $producto -> save();

        
    }
}
