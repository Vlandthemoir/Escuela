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
            'foto' => 'profesor.jpg',
            'nombre' => 'Antonio',
            'apellido_paterno' => 'Muñoz',
            'apellido_materno' => 'Garcia',
            'fecha_nacimiento' => '2000-01-2',
            'correo_electronico' => 'prueba@gmail.com',
            'contraseña' =>bcrypt('1234'),
            'telefono' => '961 000 00000',
            'sexo' => 'Hombre',
            'tipo_usuario' => 'Director',
            'estatus' => 'Activo',
        ]);
        DB::table('usuarios')->insert([
            'foto' => 'profesora.jpg',
            'nombre' => 'Elizabeth',
            'apellido_paterno' => 'Salgado',
            'apellido_materno' => 'Perez',
            'fecha_nacimiento' => '2001-01-20',
            'correo_electronico' => 'prueba1@gmail.com',
            'contraseña' =>bcrypt('1234'),
            'telefono' => '961 000 00000',
            'sexo' => 'Mujer',
            'tipo_usuario' => 'Subdirector',
            'estatus' => 'Activo',
        ]);
        DB::table('usuarios')->insert([
            'foto' => 'profesor.jpg',
            'nombre' => 'Alberto',
            'apellido_paterno' => 'Muñoz',
            'apellido_materno' => 'Garcia',
            'fecha_nacimiento' => '1980-01-20',
            'correo_electronico' => 'prueba2@gmail.com',
            'contraseña' =>bcrypt('1234'),
            'telefono' => '961 000 00000',
            'sexo' => 'Hombre',
            'tipo_usuario' => 'Director',
            'estatus' => 'Activo',
        ]);
        DB::table('usuarios')->insert([
            'foto' => 'profesora.jpg',
            'nombre' => 'Frida Sofia',
            'apellido_paterno' => 'Paez',
            'apellido_materno' => 'Rios',
            'fecha_nacimiento' => '1999-02-01',
            'correo_electronico' => 'prueba3@gmail.com',
            'contraseña' =>bcrypt('1234'),
            'telefono' => '961 000 00000',
            'sexo' => 'Mujer',
            'tipo_usuario' => 'Subdirector',
            'estatus' => 'Activo',
        ]);
    }
}
