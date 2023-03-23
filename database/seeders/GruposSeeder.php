<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grupos')->insert([
            'id_ciclo' => '1',
            'id_profesor' => '3',
            'grado' => '1',
            'grupo' => 'A',
        ]);
        DB::table('grupos')->insert([
            'id_ciclo' => '1',
            'id_profesor' => '4',
            'grado' => '1',
            'grupo' => 'B',
        ]);
        DB::table('grupos')->insert([
            'id_ciclo' => '1',
            'id_profesor' => '5',
            'grado' => '2',
            'grupo' => 'A',
        ]);
        DB::table('grupos')->insert([
            'id_ciclo' => '1',
            'id_profesor' => '6',
            'grado' => '2',
            'grupo' => 'B',
        ]);
    }
}
