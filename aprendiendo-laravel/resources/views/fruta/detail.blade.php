<h1>{{$fruta->nombre}}</h1>
<p>
    {{$fruta->descripcion}}
</p>

<a href="{{url("frutas/delete/$fruta->id")}}">Eliminar</a>
<a href="{{url("frutas/editar/$fruta->id")}}">Actualizar</a>
