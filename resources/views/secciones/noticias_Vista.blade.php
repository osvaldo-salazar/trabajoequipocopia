@extends('base.padre')

@section('titulo', 'Noticias')

@section('contenido')
<div class="text-center mb-4">
    <h1 class="fw-bold">Últimas Noticias</h1>
    <p class="text-muted">Mantente informado con las novedades más recientes</p>
</div>

@if ($noticias->isEmpty())
    <div class="alert alert-info text-center">
        No hay noticias disponibles por el momento.
    </div>
@else
    <div class="row">
        @foreach ($noticias as $noticia)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if ($noticia->imagen)
                            <img src="{{ asset($noticia->imagen) }}" alt="{{ $noticia->titulo }}" class="img-fluid">
                    @else
                        <img src="{{ asset('assets/img/default.jpg') }}" class="card-img-top" alt="Imagen por defecto">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $noticia->titulo }}</h5>
                        <p class="card-text text-muted mb-1">
                            <small>{{ $noticia->autor }} — {{ \Carbon\Carbon::parse($noticia->fecha)->format('d/m/Y') }}</small>
                        </p>
                        <p class="card-text">{{ Str::limit($noticia->descripcion_corta, 100) }}</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
@endsection
