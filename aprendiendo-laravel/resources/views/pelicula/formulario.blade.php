<h1>Formulario en Laravel</h1>
<form action="{{url('/recibir')}}" method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br>
    <br>
    <label for="email">Correo</label>
    <input type="text" name="email">
    <br>
    <br>
    <input type="submit" value="Enviar">
</form>
<?php
