@extends('Layouts.Layout')

@section('title')
Personal
@endsection
<link href="{{ asset('CSS/System/Usuarios/Create.css') }}" rel="stylesheet">
@section('content')
<div class="form-container">
    <h2>Actualizacion del personal</h2>
    <form method="post" action="{{route('usuarios.update',$usuarios->id)}}" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <label for=""><b>Foto de perfil</b></label>
        <input type="file" name="foto" value="{{$usuarios->nombre}}">
        <label for=""><b>Nombre</b></label>
        <input type="text" placeholder="Nombre(S)" name="nombre" value="{{$usuarios->nombre}}">
        <label for=""><b>Apellido Paterno</b></label>
        <input type="text" placeholder="Apellido Paterno" name="apellido_paterno" value="{{$usuarios->apellido_paterno}}">
        <label for=""><b>Apellido Materno</b></label>
        <input type="text" placeholder="Apellido Materno" name="apellido_materno" value="{{$usuarios->apellido_materno}}">
        <label for=""><b>Fecha de nacimieno</b></label>
        <input type="date" name="fecha_nacimiento" value="{{$usuarios->fecha_nacimiento}}">
        <label for=""><b>Correo Electronico</b></label>
        <input type="email" placeholder="Correo Electronico" name="correo_electronico" value="{{$usuarios->correo_electronico}}">
        <label for=""><b>Contraseña</b></label>
        <input type="password" placeholder="Contraseña" name="contraseña">
        <label for=""><b>Telefono</b></label>
        <input type="text" placeholder="Telefono" name="telefono" value="{{$usuarios->telefono}}">
        <label for=""><b>Sexo</b></label>
        <select name="sexo" value="">
        @if($usuarios->sexo == 'Hombre')
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        @endif
        @if($usuarios->sexo == 'Mujer')
            <option value="Mujer">Mujer</option>
            <option value="Hombre">Hombre</option>
        @endif
        </select>
        <label for=""><b>Tipo de usuario</b></label>
        <select name="tipo_usuario" value="">
        @if($usuarios->tipo_usuario == 'Director')
            <option value="Director">Director</option>
            <option value="Profesor">Profesor</option>
            <option value="Subdirector">Subdirector</option>
        @endif
        @if($usuarios->tipo_usuario == 'Profesor')
            <option value="Profesor">Profesor</option>
            <option value="Subdirector">Subdirector</option>
        @endif
        @if($usuarios->tipo_usuario == 'Subdirector')
            <option value="Subdirector">Subdirector</option>
            <option value="Profesor">Profesor</option>
        @endif
        </select>
        <label for=""><b>Estatus</b></label>
        <select name="estatus" value="">
        @if($usuarios->estatus == 'Activo')
            <option value="Activo">Activo</option>
            <option value="Dado de baja">Dado de baja</option>
        @endif
        @if($usuarios->estatus == 'Dado de baja')
            <option value="Dado de baja">Dado de baja</option>
            <option value="Activo">Activo</option>
        @endif
        </select>
        <button type="submit" name="button"><b>Registrar</b></button>
    </form>
</div>
@endsection