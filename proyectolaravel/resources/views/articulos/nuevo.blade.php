@extends('layouts.app')
@section('contenido')
$user->allTeams() : Illuminate\Support\Collection
<h2>Insertar artículo</h2>
<a href="{{route('articulos')}}" title="Artículos"> Artículos</a>
<!-- Abrimos FORMULARIO que se le enviará a la ruta guardar_articulo -->
<form action="{{route('guardar_articulo')}}" method="POST">
    <!-- Para que laravel permita hacer post, evita TokenMismatchException-->
    {{csrf_field()}}

    <!-- Para insertar un texto con un name = titulo -->
    <label for="titulo">Título:</label> <br />
    <input type="text" name="titulo" class="" value=""/> <br /><br />

    <!-- Para insertar un texto con un name = descripcion -->
    <label for="descripcion">Descripción: </label> <br />
    <textarea rows="5" name="descripcion" class=""></textarea>
    <br /><br />

    <!-- Para insertar un texto con un name = cuerpo -->
    <label for="cuerpo">Cuerpo: </label> <br />
    <textarea rows="8" name="cuerpo"
    class="">
    </textarea>
    <br /> <br />

    <button type="submit" class="">Crear artículo</button>
    <!-- Cerramos el formulario -->
</form>
@endsection