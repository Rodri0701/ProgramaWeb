<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\provedore;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $provedor = new provedore();

        $provedor -> Nombre_del_provedor ="Microsoft";
        $provedor -> Direccion_de_la_empresa = "Machupichu #210, Col. Centro";
        $provedor -> Numero_de_la_empresa = 4495816842;
        $provedor -> Correo_de_la_empresa = "https://support.microsoft.com/es-mx/contactus/";

        $provedor -> save();

        $provedor2 = new provedore();

        $provedor2 -> Nombre_del_provedor ="Sony";
        $provedor2 -> Direccion_de_la_empresa = "Japón #410, Nagasaki";
        $provedor2 -> Numero_de_la_empresa = 8148218489;
        $provedor2 -> Correo_de_la_empresa = " https://www.sony.com/electronics/support/contact-us";

        $provedor2 -> save();
        $provedor3 = new provedore();

        $provedor3 -> Nombre_del_provedor ="Nintendo";
        $provedor3 -> Direccion_de_la_empresa = "Tokio #2184, col Gifu";
        $provedor3 -> Numero_de_la_empresa = 8126974248;
        $provedor3 -> Correo_de_la_empresa = ": https://www.nintendo.com/contact/";

        $provedor3 -> save();

   }
}
