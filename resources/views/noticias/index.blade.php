@extends('base.padre')

@section('titulo', 'Noticias')

@section('contenido')
    <!-- Carrusel de noticias destacadas -->
    @if($destacadas->count() > 0)
    <div id="carouselDestacadas" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($destacadas as $index => $noticia)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset($noticia->imagen) }}" class="d-block w-100" style="max-height: 400px; object-fit: cover;" alt="{{ $noticia->titulo }}">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                        <h5>{{ $noticia->titulo }}</h5>
                        <p>{{ Str::limit($noticia->descripcion_corta, 120) }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDestacadas" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselDestacadas" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    @endif

    <!-- Lista de todas las noticias -->
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
