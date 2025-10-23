@extends('base.padre')

@section('titulo','Bienvenido al home')

@section('hero')
    <!-- Hero Section -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-white" 
        style="background: url('{{ asset($config->hero_home) }}') no-repeat center center; 
               background-size: cover; 
               height: 45vh;">
        <div class="container">
        </div>
    </section>
@endsection

@section('contenido')
    <!-- Semana U -->
    @if($config->section_semana_u ?? true)
    <section class="py-5 bg-light" id="semana-u">
        <div class="container">
            <h2 class="text-center mb-4">Semana U</h2>
            <p class="text-center mb-4">Descubre todas las actividades y eventos de la Semana Universitaria.</p>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <i class="bi bi-calendar-event fs-1 mb-2"></i>
                    <h5>Agenda Completa</h5>
                    <p>Conoce todas las actividades programadas para disfrutar al máximo.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <i class="bi bi-people-fill fs-1 mb-2"></i>
                    <h5>Participación Estudiantil</h5>
                    <p>Participa en talleres, conferencias y competencias con tus compañeros.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <i class="bi bi-star fs-1 mb-2"></i>
                    <h5>Experiencias Únicas</h5>
                    <p>Vive momentos inolvidables y fortalece lazos con la comunidad universitaria.</p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    @endif

    <!-- Periodo de matrícula -->
    @if($config->section_matricula ?? true)
    <section class="py-5 bg-light" id="periodo-matricula">
        <div class="container">
            <h2 class="text-center mb-4">Periodo de Matrícula</h2>
            <p class="text-center mb-4">Toda la información que necesitas para inscribirte y organizar tu semestre.</p>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <i class="bi bi-pencil-square fs-1 mb-2"></i>
                    <h5>Inscripción Fácil</h5>
                    <p>Realiza tu matrícula de forma rápida y sencilla desde cualquier dispositivo.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <i class="bi bi-clock-history fs-1 mb-2"></i>
                    <h5>Fechas Importantes</h5>
                    <p>No pierdas ninguna fecha clave del periodo de matrícula para organizar tu semestre.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <i class="bi bi-cash-stack fs-1 mb-2"></i>
                    <h5>Pagos y Financiamiento</h5>
                    <p>Conoce las opciones de pago disponibles y financiamiento si lo necesitas.</p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    @endif

    <!-- Eventos Especiales -->
    <section class="py-5 bg-light" id="eventos-especiales">
        <div class="container">
            <h2 class="text-center mb-4">Eventos Especiales</h2>
            <p class="text-center mb-4">Participa en actividades únicas que la universidad prepara cada semestre.</p>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <i class="bi bi-music-note-beamed fs-1 mb-2"></i>
                    <h5>Conciertos y Festivales</h5>
                    <p>Disfruta de eventos musicales y culturales organizados para la comunidad.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <i class="bi bi-lightbulb fs-1 mb-2"></i>
                    <h5>Talleres Creativos</h5>
                    <p>Desarrolla nuevas habilidades participando en talleres y actividades educativas.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <i class="bi bi-globe fs-1 mb-2"></i>
                    <h5>Intercambios y Conferencias</h5>
                    <p>Amplía tu conocimiento asistiendo a conferencias y programas internacionales.</p>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <!-- Servicios para Estudiantes -->
    <section class="py-5 bg-light" id="servicios-estudiantes">
        <div class="container">
            <h2 class="text-center mb-4">Servicios para Estudiantes</h2>
            <p class="text-center mb-4">Todo lo que necesitas para aprovechar al máximo tu vida universitaria.</p>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <i class="bi bi-book fs-1 mb-2"></i>
                    <h5>Biblioteca Digital</h5>
                    <p>Accede a libros y recursos académicos desde cualquier lugar.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <i class="bi bi-laptop fs-1 mb-2"></i>
                    <h5>Laboratorios Virtuales</h5>
                    <p>Realiza prácticas y proyectos con herramientas tecnológicas modernas.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <i class="bi bi-chat-dots fs-1 mb-2"></i>
                    <h5>Asesoría y Soporte</h5>
                    <p>Recibe ayuda académica y orientación personalizada en tus estudios.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        window.sectionConfig = {
            url: "{{ route('secciones.section') }}",
            token: "{{ csrf_token() }}"
        };
    </script>
    <script src="{{ asset('assets/js/section.js') }}"></script>
@endsection