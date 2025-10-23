<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <h3>Configuracion</h3>
            </div>

            <div class="sidebar-nav">
                <a class="nav-link" href="#">
                    Noticias
                </a>
                <a class="nav-link" href="{{ route('secciones.semanau') }}">
                    Administrar secciones
                </a>
                <a class="nav-link" href="{{ route('admin.configuracion') }}">
                    Imágenes Hero
                </a>

                <!-- Links a páginas públicas -->
                <div class="public-links">
                    <small>Ir al Sitio Web:</small>

                    <a class="nav-link" href="{{ url('/home') }}" target="_blank">
                        Página Principal
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        <main class="main-content">
            @yield('content')
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        @yield('scripts')

        @yield('styles')

    </div>
</body>
</html>
