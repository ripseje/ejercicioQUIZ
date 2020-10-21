@extends('layouts.ejemploLayout')


@section('titulo', 'Página 01')


@section('barralateral')

    <p>Esta parte está en la barra lateral</p>

@endsection


@section('contenido')

    <p>Este es el body</p>
    <a href="{{ url('pregunta', ['Historia']) }}" class="btn btn-xs btn-info pull-rigth">Historia</a>
    <a href="{{ url('pregunta', ['Economia']) }}" class="btn btn-xs btn-info pull-rigth">Economia</a>
    <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pull-rigth">Ingles</a>
    <a href="{{ url('api/preguntas', ['Historia']) }}" class="btn btn-xs btn-info pull-rigth">Historia pero solo un json</a>

@endsection