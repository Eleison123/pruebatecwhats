@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Búsqueda de entradas</h2>
        <form method="GET" action="{{ route('entries.search') }}">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Buscar por título, contenido o autor">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <h3>Resultados de la búsqueda</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Fecha de Publicación</th>
                    <th>Contenido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($searchResults as $result)
                    <tr>
                        <td>{{ $result->title }}</td>
                        <td>{{ $result->author }}</td>
                        <td>{{ $result->publication_date }}</td>
                        <td>{{ $result->content }}</td>
                        <td>
                            <a href="{{ route('entries.show', $result->id) }}" class="btn btn-info">Detalles</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
