<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
                <a class="nav-link" href="#">
                    Administrar secciones
                </a>
                <a class="nav-link" href="#">
                    Imágenes Hero
                </a>
                
                <!-- Links a páginas públicas -->
                <div class="public-links">
                    <small>Ir al Sitio Web:</small>
                    <a class="nav-link" href="/inicio" target="_blank">
                        Página Principal
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>
</html>