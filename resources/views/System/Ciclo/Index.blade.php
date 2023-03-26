@extends('Layouts.Layout')

@section('title')
Ciclo Escolar
@endsection
<link href="{{ asset('CSS/System/Ciclo/Index.css') }}" rel="stylesheet">
@section('content')
    @foreach ($datos as $item)
    <div>
    <div class="card">
        <a href="#" class="cursor"></a>
        <img src="" alt=''>
        <div class="card-overlay">
            <div class="title">
            <h3>
            <?php
            $inicio = explode("-", $item->fecha_inicio);
            $fin = explode("-", $item->fecha_fin);            
            $meses = array(
                "01" => "Enero",
                "02" => "Febrero",
                "03" => "Marzo",
                "04" => "Abril",
                "05" => "Mayo",
                "06" => "Junio",
                "07" => "Julio",
                "08" => "Agosto",
                "09" => "Septiembre",
                "10" => "Octubre",
                "11" => "Noviembre",
                "12" => "Diciembre",
            );
            echo $meses[$inicio[1]]." ".$inicio[0]." a ".$meses[$fin[1]]." ".$fin[0];
            ?>
            </h3>
            <p>
                N/A
            </p>
            </div>
            <div class="card-body">
                <p>
                    <p><b>Fecha de inicio:</b></p>
                    <p><i class="fa-solid fa-calendar-check"></i> {{$item->fecha_inicio}}</p>
                    <p><b>Fecha de fin:</b></p>
                    <p><i class="fa-solid fa-calendar-xmark"></i> {{$item->fecha_fin}}</p>
                    <p><b>Estado:</b></p>
                    <p>
                        @if($item->estado == 'Activo')
                        <i class="fa-solid fa-check"></i>
                        @endif
                        @if($item->estado == 'Inactivo')
                        <i class="fa-solid fa-xmark"></i>
                        @endif
                        {{$item->estado}}
                    </p>
                    <p><b>Total de grupos:</b></p>
                    <p><i class="fa-solid fa-people-roof"></i> N/A</p>
                    <p><b>Total de alumnos:</b></p>
                    <p><i class="fa-solid fa-children"></i> N/A</p>
                </p>
            </div>
        </div>
    </div>
        <div class="buttons-container">
        <form action="{{route('ciclo.delete',$item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" id="delete"><i class="fa-solid fa-trash-can"></i></button>
        </form>
        <form action="{{route('ciclo.edit',$item->id)}}" method="GET">
            @csrf
            <button type="submit" id="update"><i class="fa-solid fa-pencil"></i></button>
        </form>
        </div>
    </div>
    @endforeach
    <div class="card-add">
        <div>
            <a href="{{route('ciclo.create')}}">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>
    </div>
@endsection