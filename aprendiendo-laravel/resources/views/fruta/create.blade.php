<h1>Crear una fruta</h1>
<form action="{{url('/frutas/save')}}" method="post">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descipcion">
    <br>
    <label for="precio">Precio</label>
    <input type="text" name="precio">
    <br>
    <input type="submit" value="Guardar">

</form>
<?php
