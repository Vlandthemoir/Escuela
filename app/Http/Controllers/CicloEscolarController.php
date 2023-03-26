<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciclos;
class CicloEscolarController extends Controller
{
    public function index()
    {
        $datos = Ciclos::all();
        return view('System.Ciclo.Index',compact('datos'));
    }
    public function create()
    {
        return view('System.Ciclo.Create');
    }
    public function store(Request $request)
    {
        $ciclos = new Ciclos();
        $ciclos->fecha_inicio = $request->post('fecha_inicio');
        $ciclos->fecha_fin = $request->post('fecha_fin');
        $ciclos->estado = 'Inactivo';
        $ciclos->save();

        return redirect()->route("ciclo.index");
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $ciclos = Ciclos::find($id);
        return view("System.Ciclo.Update",compact('ciclos'));
    }
    public function update(Request $request, string $id)
    {
        $ciclos = new Ciclos();
        $ciclos->fecha_inicio = $request->input('fecha_inicio');
        $ciclos->fecha_fin = $request->input('fecha_fin');

        $estado_guardado = Ciclos::find($id);
        $ciclos->estado = $estado_guardado->estado;

        $ciclos->save();

        return redirect()->route("ciclo.index");
    }
    public function destroy(string $id)
    {
        $ciclos = Ciclos::find($id);
        $ciclos->delete();
        return redirect()->route("ciclo.index");
    }
}
