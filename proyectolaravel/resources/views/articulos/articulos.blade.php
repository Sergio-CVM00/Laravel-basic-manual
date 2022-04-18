@extends ('layouts.header')
@section('contenido')
<h2>Bienvenido a la web sobre articulos</h2>
<a href="{{route('insertar_articulo')}}" tittle="Añadir articulo"> Añadir articulo </a>
<p>Estos son los articulos publicados</p>
@endsection
