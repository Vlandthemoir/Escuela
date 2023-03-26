<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CiclosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ciclos')->insert([
            'fecha_inicio' => '2000-01-20',
            'fecha_fin' => '2000-03-20',
            'estado' => 'Inactivo',
        ]);
        DB::table('ciclos')->insert([
            'fecha_inicio' => '2000-12-20',
            'fecha_fin' => '2001-03-20',
            'estado' => 'Inactivo',
        ]);
    }
}
