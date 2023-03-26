
@extends('Layouts.Layout')

@section('title')
Ciclo Escolar
@endsection
<link href="{{ asset('CSS/System/Ciclo/Create.css') }}" rel="stylesheet">
@section('content')
<div class="form-container">
    <h2>Registro de nuevo ciclo escolar</h2>
    <form method="post" action="{{route('ciclo.store')}}">
        @csrf
        <label for=""><b>Fecha de inicio</b></label>
        <input type="date" name="fecha_inicio">
        <label for=""><b>Fecha de termino</b></label>
        <input type="date" name="fecha_fin">
        <button type="submit" name="button"><b>Registrar</b></button>
    </form>
</div>
@endsection