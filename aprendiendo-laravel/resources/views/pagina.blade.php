{{--Usar una plantilla--}}
@extends('layouts.master')

{{--Definir una seccion y enviar parametro--}}
@section('titulo', 'Master en PHP')

@section('header')
{{--Agregar a la plantilla--}}
    @parent
    <h2>Hola</h2>
@stop

{{--Agregar contenido a la seccion de plantilla--}}
@section('content')
<h1>Contenido de la pagina generica</h1>
@stop
