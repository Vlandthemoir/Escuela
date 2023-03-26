@extends('Layouts.Layout')

@section('title')
Ciclo Escolar
@endsection
<link href="{{ asset('CSS/System/Ciclo/Create.css') }}" rel="stylesheet">
@section('content')
<div class="form-container">
    <h2>Actualizacion de ciclo escolar</h2>
    <form method="post" action="{{route('ciclo.update',$ciclos->id)}}">
        @csrf
        @method("PUT")
        <label for=""><b>Fecha de inicio</b></label>
        <input type="date" name="fecha_inicio" value="{{$ciclos->fecha_inicio}}">
        <label for=""><b>Fecha de termino</b></label>
        <input type="date" name="fecha_fin" value="{{$ciclos->fecha_fin}}">
        <label for=""><b>Estado</b></label>
        <input type="text" name="estado" value="{{$ciclos->estado}}" disabled>
        <button type="submit" name="button"><b>Registrar</b></button>
    </form>
</div>
@endsection