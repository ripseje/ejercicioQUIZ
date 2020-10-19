@extends('layouts.ejemploLayout')


@section('titulo', 'Página 01')


@section('barralateral')

    <p>Esta parte está en la barra lateral</p>

@endsection


@section('contenido')

    <p>Este es el body</p>
    <a href="{{ url('/pagina02') }}" class="btn btn-xs btn-info pull-rigth">
        página 02
    </a>

@endsection