@extends('admin.admin')

@section('title', 'Configuración')

@section('content')
    <div class="container py-4">
        <h3 class="text-center mb-4 fw-bold">Configuración de Hero</h3>

            <form action="{{ route('admin.configuracion.update') }}" method="POST" id="configForm" enctype="multipart/form-data">
                @csrf
                <div class="row g-4">
                    @php
                        $imagenes = collect([
                            'hero_home' => 'Imagen Hero Home',
                            'hero_quienes_somos' => 'Imagen Hero Quiénes Somos',
                            'hero_noticias' => 'Imagen Hero Noticias',
                            'logo_home' => 'Logo'
                        ]);
                    @endphp

                    @foreach($imagenes->chunk(2) as $grupo)
                        <div class="row mb-4">
                            @foreach($grupo as $key => $label)
                                <div class="col-md-6">
                                    <div class="card shadow-sm border-0 rounded-4">
                                        <div class="card-body text-center">
                                            <h6 class="fw-bold mb-3">{{ $label }}</h6>

                                            <img src="{{ asset($config->$key ?? 'assets/default.png') }}"
                                                id="preview_{{ $key }}"
                                                class="img-fluid rounded mb-3"
                                                style="max-height: 150px; object-fit: cover;">

                                            <div class="d-flex justify-content-center gap-2">
                                                <label class="btn btn-info btn-sm position-relative">
                                                    Cambiar imagen
                                                    <input type="file" name="{{ $key }}" class="d-none" accept="image/*"
                                                        onchange="previewImage(this, '{{ $key }}')">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-5 py-2 shadow-sm">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>

        <!-- Toast de notificación -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
            <div id="successToast" class="toast align-items-center text-white bg-success border-0" role="alert">
                <div class="d-flex">
                    <div class="toast-body fw-semibold">Imágenes actualizadas correctamente ✅</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            </div>
            <div id="errorToast" class="toast align-items-center text-white bg-danger border-0" role="alert">
                <div class="d-flex">
                    <div class="toast-body fw-semibold">Ocurrió un error al actualizar 🚫</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            </div>
        </div>
    </div>

<script>
    const updateUrl = "{{ route('admin.configuracion.update') }}";
    const csrfToken = "{{ csrf_token() }}";
</script>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/configuracion.js') }}"></script>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/configuracion.css') }}">
@endsection
