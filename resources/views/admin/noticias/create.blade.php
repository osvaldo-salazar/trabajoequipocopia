@extends('admin.admin')

@section('title', 'Agregar Noticia')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Agregar Nueva Noticia</h2>

    <!-- Mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <br>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Formulario de Noticia
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.noticias.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Título</label>
                            <input type="text" name="titulo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Autor</label>
                            <input type="text" name="autor" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Fecha</label>
                            <input type="date" name="fecha" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Descripción corta</label>
                            <textarea name="descripcion_corta" rows="2" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Descripción larga</label>
                            <textarea name="descripcion_larga" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Imagen</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>
                        <div class="form-check mb-2">
                            <input type="checkbox" name="destacado" class="form-check-input" value="1">
                            <label class="form-check-label">Destacado</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" name="activo" class="form-check-input" value="1" checked>
                            <label class="form-check-label">Activo</label>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Guardar Noticia</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
