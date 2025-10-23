@extends('admin.admin')

@section('title', 'Control de Secciones')

@section('content')

    <div class="container py-4">
        <h3 class="text-center mb-4 fw-bold">Configuración de Secciones</h3>

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow border-0 rounded-4 mb-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3 text-center">Secciones del Sitio</h5>
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="fw-semibold">Periodo de Matrícula</span>
                            <div class="form-check form-switch">
                                <input class="form-check-input toggle-section"
                                    type="checkbox"
                                    role="switch"
                                    data-section="section_matricula"
                                    {{ $config->section_matricula ? 'checked' : '' }}>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center py-2">
                            <span class="fw-semibold">Semana U</span>
                            <div class="form-check form-switch">
                                <input class="form-check-input toggle-section"
                                    type="checkbox"
                                    role="switch"
                                    data-section="section_semana_u"
                                    {{ $config->section_semana_u ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('secciones.semanau') }}" class="btn btn-outline-secondary mt-2">← Volver</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Toasts -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
        <div id="successToast" class="toast align-items-center text-white bg-success border-0 mb-2" role="alert">
            <div class="d-flex">
                <div class="toast-body fw-semibold" id="successMsg">Sección actualizada ✅</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
        <div id="errorToast" class="toast align-items-center text-white bg-danger border-0" role="alert">
            <div class="d-flex">
                <div class="toast-body fw-semibold">Error al actualizar 🚫</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>

<script>
    const sectionUrl = "{{ route('secciones.section') }}";
    const csrfToken = "{{ csrf_token() }}";
</script>

@endsection

@section('scripts')
    <script src="{{ asset('assets/js/section.js') }}"></script>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/section.css') }}">
@endsection
