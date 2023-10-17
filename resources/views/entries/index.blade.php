@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de entradas</h2>
        <a href="{{ route('entries.create') }}" class="btn btn-primary">Crear nueva entrada</a>
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
                @foreach ($entries as $entry)
                    <tr>
                        <td>{{ $entry->title }}</td>
                        <td>{{ $entry->author }}</td>
                        <td>{{ $entry->publication_date }}</td>
                        <td>{{ Str::limit($entry->content, 70) }}</td>
                        <td>
                            <a href="{{ route('entries.show', $entry->id) }}" class="btn btn-info">Detalles</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
