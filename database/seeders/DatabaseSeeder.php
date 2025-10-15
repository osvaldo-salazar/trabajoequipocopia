<?php

namespace Database\Seeders;

use App\Http\Controllers\Configuracion;
use App\Models\ConfiguracionModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        ConfiguracionModel::create([
        'assets/img/hero_home/hero_home.jpeg',
        true,
        false,
        'assets/img/hero_quienes_somos/quienes_somos.jpeg',
        'assets/img/hero_noticias/hero_noticias.jpeg',
        'assets/img/logo_home/logo_home.png'
        ]);
    }
}
