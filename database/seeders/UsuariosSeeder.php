<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nombre' => 'elthon',
            'apellido_paterno' => 'arevalo',
            'apellido_materno' => 'esquinca',
            'fecha_nacimiento' => '12-01-2000',
            'correo_electronico' => 'prueba@gmail.com',
            'contraseña' =>bcrypt('1234'),
            'telefono' => '1234567890',
            'tipo_usuario' => 'Profesor',
            'estatus' => 'Activo',
        ]);
    }
}
