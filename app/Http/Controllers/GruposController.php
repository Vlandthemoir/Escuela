<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Grupos;
use App\Models\Ciclos;
use Illuminate\Support\Facades\DB;
class GruposController extends Controller
{
    public function index()
    {
        $ciclo = Ciclos::all()->where("estado","=","Activo");
        $id = $ciclo->pluck("id")->first();
        $datos = Grupos::join('usuarios','grupos.id_profesor','=','usuarios.id')
            ->select('grupos.id','grupos.grado','grupos.grupo','usuarios.nombre','usuarios.apellido_paterno','usuarios.apellido_materno')
            ->where('grupos.id_ciclo','=',$id)
            ->get();
        return view('System.Grupos.Index',compact('datos'));
    }
    public function create()
    {
        $ciclo = Ciclos::all()->where("estado","=","Activo");
        $id = $ciclo->pluck("id")->first();

        $ocupados = Grupos::all()
            ->where('id_ciclo','=',$id)
            ->pluck('id_profesor');
            
        /*$ocupados = DB::Table('grupos')
            ->where('id_ciclo','=',$id)
            ->pluck('id_profesor');*/

        $cadena = implode(',', $ocupados->toArray());
        $array = explode(",", $cadena);
        $datos = DB::table('usuarios')
            ->where('tipo_usuario','=','Profesor')
            ->whereNotIn('id',$array)
            ->get();
        return view('System.Grupos.Create',compact('datos'));
    }
    public function store(Request $request)
    {
        $ciclo = Ciclos::all()->where("estado","=","Activo");
        $id = $ciclo->pluck("id")->first();

        $grupos = new Grupos();
        $grupos->id_ciclo = $id;
        $grupos->id_profesor = $request->post('id_profesor');
        $grupos->grado = $request->post('grado');
        $grupos->grupo = $request->post('grupo');
        $grupos->save();
        return redirect()->route("grupos.index");
    }
    public function show(string $id)
    {
    }
    public function edit(string $id)
    {
        $grupos = Grupos::find($id);
        return view("System.Grupos.Update",compact('grupos'));
    }
    public function update(Request $request, string $id)
    {
        $grupos = new Grupos();
        $grupos->id_ciclo = "1";
        $grupos->id_profesor = $request->input('id_profesor');
        $grupos->grado = $request->input('grado');
        $grupos->grupo = $request->input('grupo');
        $grupos->save();
        return redirect()->route("grupos.index");
    }
    public function destroy(string $id)
    {
        $grupos = Grupos::find($id);
        $grupos->delete();
        return redirect()->route("grupos.index");
    }
}
