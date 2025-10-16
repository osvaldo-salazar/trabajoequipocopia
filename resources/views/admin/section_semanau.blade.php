@extends('admin.admin')

@section('title', 'Control de Secciones')

@section('content')

    <div class="container py-5">
    <h3 class="text-center fw-bold mb-4">Control de Secciones</h3>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow border-0 rounded-4 p-4">
                <form id="seccionesForm">
                    @csrf
                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-semibold mb-1">Periodo de Matrícula</h6>
                            <small class="text-muted">Activa o desactiva la sección de matrícula en el sitio.</small>
                        </div>
                        <div class="form-check form-switch fs-5">
                            <input class="form-check-input toggle-switch" type="checkbox" id="matricula" name="section_matricula"
                                {{ $config->section_matricula ? 'checked' : '' }}>
                        </div>
                    </div>

                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-semibold mb-1">Semana U</h6>
                            <small class="text-muted">Controla la visibilidad de la sección Semana Universitaria.</small>
                        </div>
                        <div class="form-check form-switch fs-5">
                            <input class="form-check-input toggle-switch" type="checkbox" id="semana_u" name="section_semana_u"
                                {{ $config->section_semana_u ? 'checked' : '' }}>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success px-4 py-2 fw-bold shadow-sm save-btn">
                            <i class="bi bi-floppy"></i> Guardar Cambios
                        </button>
                    </div>
                </form>

                <!-- Alertas -->
                <div id="alerta" class="alert mt-3 fade" role="alert" style="display:none;"></div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('assets/js/section.js') }}"></script>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/section.css') }}">
@endsection
