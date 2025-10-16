@extends('base.padre')

@section('titulo', 'Semana U')

@section('hero')
@endsection

@section('contenido')
    <section id="hero" class="py-5 text-center bg-light">
    <div class="container">
        <h1 class="fw-bold mb-3">Bienvenido a Nuestro Sitio</h1>
        <p class="lead">Explora nuestras secciones dinámicas.</p>
    </div>
    </section>

    <!-- SECCIÓN MATRÍCULA -->
    @if ($config && $config->hero_home)
        <section id="hero_home" class="hero-section text-center text-white position-relative">
            <img src="{{ asset($config->hero_home) }}"
                 alt="Hero Home"
                 class="img-fluid w-100 hero-img animate__animated animate__fadeIn">
            <div class="hero-overlay d-flex align-items-center justify-content-center">
                <div>
                    <h1 class="display-4 fw-bold animate__animated animate__fadeInDown">
                        Bienvenido a Nuestra Institución
                    </h1>
                    <p class="lead animate__animated animate__fadeInUp">
                        Educación de calidad al alcance de todos 🎓
                    </p>
                </div>
            </div>
        </section>
    @endif

    <!-- SECCIÓN MATRÍCULA -->
    @if ($config && $config->section_matricula)
        <section id="matricula" class="py-5 bg-light text-center">
            <div class="container">
                <h2 class="fw-bold mb-3">Periodo de Matrícula</h2>
                <p class="text-muted mb-4">¡Aprovecha e inscríbete hoy mismo!</p>
                <a href="{{ route('secciones.section') }}" class="btn btn-primary shadow-sm">
                    Matricúlate Aquí
                </a>
            </div>
        </section>
    @endif

    @if ($config && $config->hero_quienes_somos)
        <section id="hero_quienes_somos" class="hero-section text-center text-white position-relative">
            <img src="{{ asset($config->hero_quienes_somos) }}"
                 alt="Hero Quienes Somos"
                 class="img-fluid w-100 hero-img animate__animated animate__fadeIn">
            <div class="hero-overlay d-flex align-items-center justify-content-center">
                <div>
                    <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">
                        Conoce quiénes somos
                    </h1>
                    <p class="lead animate__animated animate__fadeInUp">
                        Comprometidos con la excelencia educativa.
                    </p>
                </div>
            </div>
        </section>
    @endif

    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold">Nuestra Historia</h2>
            <p class="text-muted">Más de 20 años formando profesionales.</p>
        </div>
    </section>

    @if ($config && $config->hero_noticias)
        <section id="hero_noticias" class="hero-section text-center text-white position-relative">
            <img src="{{ asset($config->hero_noticias) }}"
                 alt="Hero Noticias"
                 class="img-fluid w-100 hero-img animate__animated animate__fadeIn">
            <div class="hero-overlay d-flex align-items-center justify-content-center">
                <div>
                    <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">
                        Noticias y Eventos
                    </h1>
                    <p class="lead animate__animated animate__fadeInUp">
                        Mantente informado de nuestras últimas novedades 📢
                    </p>
                </div>
            </div>
        </section>
    @endif

    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold mb-4 text-center">Últimas Noticias</h2>
            <!-- Aquí irán las noticias dinámicas -->
        </div>
    </section>

@endsection
