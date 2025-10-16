@extends('admin.admin')

@section('title', 'Lista de Noticias')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Lista de Noticias</h2> <br>

    <!-- Mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">
            Noticias Registradas
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Imagen</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Fecha</th>
                        <th>Activo</th>
                        <th>Destacado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($noticias as $noticia)
                        <tr>
                            <td>
                                @if($noticia->imagen)
                                    <img src="{{ asset($noticia->imagen) }}" alt="{{ $noticia->titulo }}" width="80">
                                @else
                                    <img src="{{ asset('assets/img/default.jpg') }}" alt="Sin imagen" width="80">
                                @endif
                            </td>
                            <td>{{ $noticia->titulo }}</td>
                            <td>{{ $noticia->autor }}</td>
                            <td>{{ \Carbon\Carbon::parse($noticia->fecha)->format('d/m/Y') }}</td>
                            <td>{{ $noticia->activo ? 'Sí' : 'No' }}</td>
                            <td>{{ $noticia->destacado ? 'Sí' : 'No' }}</td>
                            <td>
                                <form action="{{ route('admin.noticias.destroy', $noticia) }}" method="POST" onsubmit="return confirm('¿Eliminar esta noticia?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No hay noticias registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
