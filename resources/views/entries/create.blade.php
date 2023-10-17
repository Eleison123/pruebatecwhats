@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear nueva entrada</h2>
        <form method="POST" action="{{ route('entries.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author">Autor</label>
                <input type="text" name="author" id="author" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="publication_date">Fecha de publicación</label>
                <input type="date" name="publication_date" id="publication_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
