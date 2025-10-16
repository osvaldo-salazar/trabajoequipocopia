@extends('base.padre')

@section('titulo', 'Noticias')

@section('contenido')
    <!-- Hero -->
    <div class="hero mb-5">
        <div class="position-relative text-center text-white">
            <img src="{{ asset('images/hero-noticias.jpg') }}" class="img-fluid w-100" alt="Noticias" style="max-height: 400px; object-fit: cover;">
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="display-5 fw-bold">Noticias</h1>
                <p class="lead">Mantente al día con lo más reciente</p>
            </div>
        </div>
    </div>

    <!-- Lista de noticias -->
    <div class="row">
        @forelse ($noticias as $noticia)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($noticia->imagen)
                        <img src="{{ asset($noticia->imagen) }}" class="card-img-top" alt="{{ $noticia->titulo }}">
                    @else
                        <img src="{{ asset('assets/img/default.jpg') }}" class="card-img-top" alt="Sin imagen">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $noticia->titulo }}</h5>
                        <p class="card-text">{{ Str::limit($noticia->descripcion_corta, 100) }}</p>
                        <a href="{{ route('noticias.show', $noticia->idNoticia) }}" class="btn btn-primary btn-sm">Ver más</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small>Por {{ $noticia->autor }} | {{ \Carbon\Carbon::parse($noticia->fecha)->format('d/m/Y') }}</small>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No hay noticias disponibles.</p>
            </div>
        @endforelse
    </div>
@endsection
