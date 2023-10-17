@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles de la entrada</h2>
        <h3>Título: {{ $entry->title }}</h3>
        <p>Autor: {{ $entry->author }}</p>
        <p>Fecha de Publicación: {{ $entry->publication_date }}</p>
        <p>Contenido: {{ $entry->content }}</p>
        <a href="{{ route('entries.index') }}" class="btn btn-primary">Volver al listado</a>
    </div>
@endsection

