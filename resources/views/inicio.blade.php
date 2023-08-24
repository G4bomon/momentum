@extends('base')
@section('style')
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endsection
@section('content')
<h2>Últimos cursos añadidos</h2>
<section>  
    <article>
        <a href="#">
            <h3>El abc para administrar tu negocio</h3>
            <!-- Puedes agregar más contenido aquí si es necesario -->
        </a>
    </article>
    <article>
        <a href="#">
            <h3>Variables para comercializar un producto en Venezuela</h3>
            <!-- Puedes agregar más contenido aquí si es necesario -->
        </a>
    </article>
    <article>
        <a href="#">
            <h3>Formulacion de proyectos de inversion</h3>
            <!-- Puedes agregar más contenido aquí si es necesario -->
        </a>
    </article>
    <article>
        <a href="#">
            <h3>Estructura de costos</h3>
            <!-- Puedes agregar más contenido aquí si es necesario -->
        </a>
    </article>
</section>
@endsection
