<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciclos;
use App\Models\Usuarios;

class EscuelaController extends Controller
{
    public function index()
    {
        $ciclo_actual = Ciclos::all()->where("estado","=","Activo");
        $ciclos = Ciclos::all()->where("estado","=","Inactivo");

        return view('System.Escuela.Index',compact('ciclo_actual','ciclos'));
    }
    public function update(Request $request, string $id){
        $ciclos = Ciclos::find($id);
        $ciclos->periodo = $request->input('periodo');
        $ciclos->save();
        return redirect()->route("escuela.index");
    }
    public function change(Request $request){
        $verificar = Ciclos::all()->where("estado","=","Activo");
        if(count($verificar) > 0){
            $id = $verificar->pluck('id')->first();
            $cambiar = Ciclos::find($id);
            $cambiar->estado = "Inactivo";
            $cambiar->save();
        }
        $id_ciclo = $request->input('ciclo_escolar');
        $ciclo = Ciclos::find($id_ciclo);
        $ciclo->estado = 'Activo';
        $ciclo->save();
        return redirect()->route("escuela.index");
    }
}
