<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Para crear el seed
        // php artisan make:seed <nombre>

        // Para ejecutar el seed
        // php artisan db:seed -class=<nombre>
        for ($i = 1; $i <= 20; $i++) {
            DB::table('frutas')->insert([
                    'nombre' => 'Cereza ' . $i,
                    'descripcion' => 'Descripcion de la fruta ' . $i,
                    'precio' => $i,
                    'fecha' => "2022-12-01"
                ]
            );
        }
        $this->command->info('La tabla de frutas ha sido rellenada');
    }
}
