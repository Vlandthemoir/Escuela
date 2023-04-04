@extends('Layouts.Layout')

@section('title')
Escuela
@endsection
<link href="{{ asset('CSS/System/Escuela/Index.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <h2>Ciclo Escolar</h2>
    <div class="form-actual">
        @if($ciclo_actual->isEmpty())
            <label>No hay ningun ciclo escolar habilitado, 
                Por fabor seleccione un ciclo escolar para usar el sistema
            </label>
        @else
            @foreach($ciclo_actual as $actual)
            <label for=""><b>Ciclo escolar actual:</b></label>
            <?php
            $inicio = explode("-", $actual->fecha_inicio);
            $fin = explode("-", $actual->fecha_fin);            
            $meses = array(
                "01" => "Enero","02" => "Febrero","03" => "Marzo",
                "04" => "Abril","05" => "Mayo","06" => "Junio",
                "07" => "Julio","08" => "Agosto","09" => "Septiembre",
                "10" => "Octubre","11" => "Noviembre","12" => "Diciembre",
            );
            $fecha = $meses[$inicio[1]]." ".$inicio[0]." a ".$meses[$fin[1]]." ".$fin[0];
            echo '<input type="text" value="'.$fecha.'" disabled>';
            ?>
            <label for=""><b>Fecha de inicio:</b></label>
            <input type="text" value="{{$actual->fecha_inicio}}" disabled>
            <label for=""><b>Fecha de termino:</b></label>
            <input type="text" value="{{$actual->fecha_fin}}" disabled>
            <label for=""><b>Periodo:</b></label>
            <form method="post" action="{{route('escuela.update',$actual->id)}}">
            @csrf
            @method("PUT")
                <select name="periodo">
                    <option value="{{$actual->periodo}}">{{$actual->periodo}}</option>
                    @if($actual->periodo == 'Normal')
                    <option value="Inscripciones">Inscripciones</option>
                    @endif
                    @if($actual->periodo == 'Inscripciones')
                    <option value="Normal">Normal</option>
                    @endif
                </select>
                <button>Cambiar</button>
            </form>
            @endforeach
        @endif
    </div>
    <div class="form-change">
        <form method="post" action="{{route('escuela.change')}}">
        @csrf
        @if($ciclo_actual->isEmpty())
        <label for=""><b>Seleccionar ciclo escolar:</b></label>
        @else
        <label for=""><b>Cambiar ciclo escolar:</b></label>
        @endif
            <select name="ciclo_escolar">
                <option disabled selected>Selecciona un ciclo escolar</option>
                @foreach($ciclos as $ciclo)
                <?php
                $inicio = explode("-", $ciclo->fecha_inicio);
                $fin = explode("-", $ciclo->fecha_fin);            
                $meses = array(
                    "01" => "Enero","02" => "Febrero","03" => "Marzo",
                    "04" => "Abril","05" => "Mayo","06" => "Junio",
                    "07" => "Julio","08" => "Agosto","09" => "Septiembre",
                    "10" => "Octubre","11" => "Noviembre","12" => "Diciembre",
                );
                $fecha = $meses[$inicio[1]]." ".$inicio[0]." a ".$meses[$fin[1]]." ".$fin[0];
                echo '<option value="'.$ciclo->id.'">'.$fecha.'</option>';
                ?>
                @endforeach
            </select>
            @if($ciclo_actual->isEmpty())
            <button>Guardar</button>
            @else
            <button>Cambiar</button>
            @endif
        </form>
    </div>
    <h2>Profesores</h2>
    <h2>Grupos</h2>
</div>
@endsection