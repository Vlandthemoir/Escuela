@extends('Layouts.Layout')

@section('title')
Personal
@endsection
<link href="{{ asset('CSS/System/Usuarios/Create.css') }}" rel="stylesheet">
@section('content')
<div class="form-container">
    <h2>Registro de personal</h2>
    <form method="post" action="{{route('usuarios.store')}}" enctype="multipart/form-data">
        @csrf
        <label for=""><b>Foto de perfil</b></label>
        <input type="file" name="foto">
        <label for=""><b>Nombre</b></label>
        <input type="text" placeholder="Nombre(S)" name="nombre">
        <label for=""><b>Apellido Paterno</b></label>
        <input type="text" placeholder="Apellido Paterno" name="apellido_paterno">
        <label for=""><b>Apellido Materno</b></label>
        <input type="text" placeholder="Apellido Materno" name="apellido_materno">
        <label for=""><b>Fecha de nacimieno</b></label>
        <input type="date" name="fecha_nacimiento">
        <label for=""><b>Correo Electronico</b></label>
        <input type="email" placeholder="Correo Electronico" name="correo_electronico">
        <label for=""><b>Contraseña</b></label>
        <input type="password" placeholder="Contraseña" name="contraseña">
        <label for=""><b>Telefono</b></label>
        <input type="text" placeholder="Telefono" name="telefono">
        <label for=""><b>Sexo</b></label>
        <select name="sexo" value="">
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>
        <label for=""><b>Tipo de usuario</b></label>
        <select name="tipo_usuario" value="">
            <option value="Profesor">Profesor</option>
            <option value="Subdirector">Subdirector</option>
        </select>
        <label for=""><b>Estatus</b></label>
        <select name="estatus" value="">
            <option value="Activo">Activo</option>
            <option value="Dado de baja">Dado de baja</option>
        </select>
        <button type="submit" name="button"><b>Registrar</b></button>
    </form>
</div>
@endsection