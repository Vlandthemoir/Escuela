@extends('Layouts.Layout')

@section('title')
Grupos
@endsection
<link href="{{ asset('CSS/System/Grupos/Create.css') }}" rel="stylesheet">
@section('content')
<div class="form-container">
    <h2>Registro de grupos</h2>
    <form method="post" action="{{route('grupos.store')}}">
        @csrf
        <label for=""><b>Grado</b></label>
        <select name="grado" value="">
        <option value="" disabled selected>Selecciona un grado</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <label for=""><b>Grupo</b></label>
        <select name="grupo" value="">
        <option value="" disabled selected>Selecciona un grupo</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
        <label for=""><b>Profesor a cargo</b></label>
        <select name="id_profesor" value="">
        <option value="" disabled selected>Selecciona un profesor</option>
        @foreach ($datos as $item)
            <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido_paterno}} {{$item->apellido_materno}}</option>
        @endforeach
        </select>
        <button type="submit" name="button"><b>Registrar</b></button>
    </form>
</div>
@endsection