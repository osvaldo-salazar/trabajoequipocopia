@extends('base.padre')

@section('titulo', $noticia->titulo)

@section('contenido')
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="fw-bold">{{ $noticia->titulo }}</h1>
            <p class="text-muted">Por {{ $noticia->autor }} | {{ \Carbon\Carbon::parse($noticia->fecha)->format('d/m/Y') }}</p>
        </div>

        @if($noticia->imagen)
            <div class="text-center mb-4">
                <img src="{{ asset($noticia->imagen) }}" class="img-fluid rounded shadow" alt="{{ $noticia->titulo }}">
            </div>
        @endif

        <div class="mb-5">
            <p class="lead">{!! $noticia->descripcion_larga !!}</p>
        </div>

        <a href="{{ route('noticias.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Volver a Noticias
        </a>
    </div>
@endsection
