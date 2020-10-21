@extends('layouts.ejemploLayout')


@section('titulo', 'Página 01')


@section('barralateral')
    @parent
    <p>Esta parte es de la página 2</p>

@endsection


@section('contenido')

    <h3>EL tema elegido es: {{ $tema }}</h3>
    <a href="{{ url('/') }}" class="btn btn-xs btn-info pull-rigth">
        página 01
    </a>

@endsection