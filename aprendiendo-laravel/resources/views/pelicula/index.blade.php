<h1>{{$titulo}}</h1>
<p>(acción index del controlador PeliculasController)</p>
@if(isset($pagina))
    <h3>La pagina es {{$pagina}}</h3>
{{--    Enviar parametro por url--}}
{{--    <a href="{{ url('/detalle', ['id'=> 12]) }}">Ir al detalle</a>--}}
    <a href="{{ url('/detalle') }}">Ir al detalle</a>
@endif
<?php
