@extends('Layouts.Layout')

@section('title')
Personal
@endsection
<link href="{{ asset('CSS/System/Usuarios/Index.css') }}" rel="stylesheet">
@section('content')
    @foreach ($datos as $item)
    <div>
    <div class="card">
        <a href="#" class="cursor"></a>
        <img src="/storage/Fotos/Personal/{{$item->foto}}" alt=''>
        <div class="card-overlay">
            <div class="title">
            <h3>{{$item->nombre}} {{$item->apellido_paterno}} {{$item->apellido_materno}}</h3>
            <p>
                @if($item->tipo_usuario == 'Profesor')
                <i class="fa-solid fa-chess-pawn"></i>
                @endif
                @if($item->tipo_usuario == 'Subdirector')
                <i class="fa-solid fa-chess-queen"></i>
                @endif
                @if($item->tipo_usuario == 'Director')
                <i class="fa-solid fa-chess-king"></i>
                @endif
                {{$item->tipo_usuario}}
            </p>
            </div>
            <div class="card-body">
                <p>
                    <p><b>Correo electronico:</b></p>
                    <p><i class="fa-solid fa-at"></i> {{$item->correo_electronico}}</p>
                    <p><b>Numero de telefono:</b></p>
                    <p><i class="fa-solid fa-phone"></i> {{$item->telefono}}</p>
                    <p><b>Fecha de nacimiento:</b></p>
                    <p><i class="fa-regular fa-calendar-days"></i> {{$item->fecha_nacimiento}}</p>
                    <p><b>Edad:</b></p>
                    <p>
                    @if($item->sexo == 'Hombre')
                    <i class="fa-solid fa-person"></i>
                    @endif
                    @if($item->sexo == 'Mujer')
                    <i class="fa-solid fa-person-dress"></i>
                    @endif
                    <?php
                    $fecha_actual = new DateTime();
                    $nacimiento = new DateTime($item->fecha_nacimiento);
                    $edad = date_diff($nacimiento,$fecha_actual);
                    echo $edad->format('%y años, %m meses y %d días');
                    ?>
                    </p>
                    <p><b>Sexo:</b></p>
                    <p>
                    @if($item->sexo == 'Hombre')
                    <i class="fa-solid fa-mars"></i>
                    @endif
                    @if($item->sexo == 'Mujer')
                    <i class="fa-solid fa-venus"></i>
                    @endif
                    {{$item->sexo}}
                    </p>
                    <p><b>Estatus:</b></p>
                    <p>
                    @if($item->estatus == 'Activo')
                    <i class="fa-solid fa-circle-check"></i>
                    @endif
                    @if($item->estatus == 'Dado de baja')
                    <i class="fa-solid fa-circle-xmark"></i>
                    @endif
                    {{$item->estatus}}
                    </p>
                </p>
            </div>
        </div>
    </div>
        <div class="buttons-container">
        <form action="{{route('usuarios.delete',$item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" id="delete"><i class="fa-solid fa-trash-can"></i></button>
        </form>
        <form action="{{route('usuarios.edit',$item->id)}}" method="GET">
            @csrf
            <button type="submit" id="update"><i class="fa-solid fa-pencil"></i></button>
        </form>
        </div>
    </div>
    @endforeach
    <div class="card-add">
        <div>
            <a href="{{route('usuarios.create')}}">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>
    </div>
@endsection