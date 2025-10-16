@extends('admin.admin')

@section('title', 'Configuración')



@section('content')
    <div class="container mt-5">
        <h3 class="text-center mb-4 fw-bold">Configuración de Imágenes</h3>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form action="{{ route('admin.configuracion.update') }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow-sm bg-white">
            @csrf
            @method('PUT')

        <div class="row g-4">
            @foreach([
                'hero_home' => 'Hero Home',
                'hero_quienes_somos' => 'Hero Quienes Somos',
                'hero_noticias' => 'Hero Noticias',
                'logo_home' => 'Logo Home'
            ] as $campo => $label)
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm p-3 position-relative hover-card">
                        <h6 class="fw-bold mb-2">{{ $label }}</h6>

                        @if($config->$campo)
                            <div class="text-center mb-3">
                                <img src="{{ asset($config->$campo) }}" class="img-thumbnail preview-img" alt="Vista previa" style="max-height: 150px;">
                            </div>
                        @endif

                        <div class="d-flex align-items-center gap-2">
                            <input type="file" name="{{ $campo }}" class="form-control @error($campo) is-invalid @enderror" accept="image/*" onchange="previewImage(event, '{{ $campo }}')">
                            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{ $campo }}">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>

                        @error($campo)
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Modal de vista previa -->
                <div class="modal fade" id="modal-{{ $campo }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $label }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body text-center">
                                @if($config->$campo)
                                    <img src="{{ asset($config->$campo) }}" class="img-fluid rounded shadow">
                                @else
                                    <p class="text-muted">No hay imagen cargada.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success px-4 py-2 fw-bold shadow-sm save-btn">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>

    <script>
    function previewImage(event, campo) {
        const reader = new FileReader();
        reader.onload = function(){
            const preview = document.querySelector(`[name="${campo}"]`).closest('.card').querySelector('.preview-img');
            if(preview) preview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/configuracion.js') }}"></script>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/configuracion.css') }}">
@endsection
