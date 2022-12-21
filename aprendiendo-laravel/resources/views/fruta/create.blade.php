@if(isset($fruta) && is_object($fruta))
    <h1>Editar fruta</h1>
@else
<h1>Crear una fruta</h1>
@endif
<form action="{{isset($fruta) ? url('/frutas/update') : url('/frutas/save')}}" method="post">
    @csrf
    @if(isset($fruta) && is_object($fruta))
        <input type="hidden" value="{{$fruta->id}}" name="id">
    @endif

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{$fruta->nombre ?? ''}}">
    <br>
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descipcion" value="{{$fruta->descripcion ?? ''}}">
    <br>
    <label for="precio">Precio</label>
    <input type="text" name="precio" value="{{$fruta->precio ?? 0}}">
    <br>
    <input type="submit" value="Guardar">

</form>
<?php
