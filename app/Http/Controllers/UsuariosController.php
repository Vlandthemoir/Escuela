<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

use Carbon\Carbon;

class UsuariosController extends Controller
{
    public function index()
    {
        $datos = Usuarios::all();
        return view('System.Usuarios.Index',compact('datos'));
    }
    public function create()
    {
        return view('System.Usuarios.Create');
    }
    public function store(Request $request)
    {
        $nombre_foto = Carbon::now();
        $foto = $request->file('foto')->storeAs('public/Fotos/Personal',strval($nombre_foto).".jpg");
        $path = $foto;

        $usuarios = new Usuarios();

        $usuarios->foto = strval($nombre_foto).".jpg";
        $usuarios->nombre = $request->post('nombre');
        $usuarios->apellido_paterno = $request->post('apellido_paterno');
        $usuarios->apellido_materno = $request->post('apellido_materno');
        $usuarios->fecha_nacimiento = $request->post('fecha_nacimiento');
        $usuarios->correo_electronico = $request->post('correo_electronico');
        $usuarios->contraseña = bcrypt($request->post('contraseña'));
        $usuarios->telefono = $request->post('telefono');
        $usuarios->sexo = $request->post('sexo');
        $usuarios->tipo_usuario = $request->post('tipo_usuario');
        $usuarios->estatus = $request->post('estatus');
        $usuarios->save();

        return redirect()->route("usuarios.index");
    }
    public function show(string $id)
    {
    }
    public function edit(string $id)
    {
        $usuarios = Usuarios::find($id);
        return view("System.Usuarios.Update",compact('usuarios'));
    }
    public function update(Request $request, string $id)
    {
        $usuarios = Usuarios::find($id);
        if(!$request->file('foto') === null){  
            //$usuarios->foto = $usuarios->foto;
            $nombre_foto = Carbon::now();
            $foto = $request->file('foto')->storeAs('public/Fotos/Personal',strval($nombre_foto).".jpg");
            $path = $foto;
            $usuarios->foto = strval($nombre_foto).".jpg";
        }
        $usuarios->nombre = $request->input('nombre');
        $usuarios->apellido_paterno = $request->input('apellido_paterno');
        $usuarios->apellido_materno = $request->input('apellido_materno');
        if(!$request->input('fecha_nacimiento') === null){
            //$usuarios->fecha_nacimiento = $usuarios->fecha_nacimiento;
            $usuarios->fecha_nacimiento = $request->input('fecha_nacimiento');
        }
        $usuarios->correo_electronico = $request->input('correo_electronico');
        if(!$request->input('contraseña') === null){
            //$usuarios->contraseña = $usuarios->contraseña;
            $usuarios->contraseña = bcrypt($request->input('contraseña'));
        }
        $usuarios->telefono = $request->input('telefono');
        $usuarios->sexo = $request->input('sexo');
        $usuarios->tipo_usuario = $request->input('tipo_usuario');
        $usuarios->estatus = $request->input('estatus');
        $usuarios->save();
        
        return redirect()->route("usuarios.index");
    }
    public function destroy(string $id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->delete();
        return redirect()->route("usuarios.index");
    }
}
