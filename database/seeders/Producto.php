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


        $producto1 = new productos();

        $producto1 -> NombreProd = "asf";
        $producto1 -> Sinopsis = "asfsdaf";
        $producto1 -> Precio = 800;
        $producto1 -> Stock = 10;
        $producto1 -> id_prov = 2;
        $producto1 -> save();
        
    }
}
