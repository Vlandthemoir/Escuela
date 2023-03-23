@extends('Layouts.Layout')

@section('title')
Grupos
@endsection
<link href="{{ asset('CSS/System/Grupos/Index.css') }}" rel="stylesheet">
@section('content')
    @foreach ($datos as $item)
    <div>
    <div class="card">
        <a href="#" class="cursor"></a>
        <img src="" alt=''>
        <div class="card-overlay">
            <div class="title">
            <h3>{{$item->grado}}°"{{$item->grupo}}"</h3>
            <p>
                hola
            </p>
            </div>
            <div class="card-body">
                <p>
                    <p><b>Profesor a cargo:</b></p>
                    <p><i class="fa-solid fa-chalkboard-user"></i> {{$item->nombre}} {{$item->apellido_paterno}} {{$item->apellido_materno}}</p>
                    <p><b>Total de alumnos:</b></p>
                    <p><i class="fa-solid fa-children"></i> N/A</p>
            </div>
        </div>
    </div>
        <div class="buttons-container">
        <form action="{{route('grupos.delete',$item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" id="delete"><i class="fa-solid fa-trash-can"></i></button>
        </form>
        <form action="{{route('grupos.edit',$item->id)}}" method="GET">
            @csrf
            <button type="submit" id="update"><i class="fa-solid fa-pencil"></i></button>
        </form>
        </div>
    </div>
    @endforeach
    <div class="card-add">
        <div>
            <a href="{{route('grupos.create')}}">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>
    </div>
@endsection