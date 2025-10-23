<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Trabajo en Equipo')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/padre.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

     <!-- Animate.css -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Iconos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Trabajo en equipo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/quienes') }}">Quienes somos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  @yield('hero')
<main class="py-4">
    <div class="container">
        @yield('contenido')
    </div>
</main>


<!-- Footer -->
    <footer class=" mt-5 py-4" id="footer">
        <div class="container text-center">
            <p>Síguenos en redes sociales</p>
            <div class="mb-2">
                <a href="https://facebook.com" target="_blank" class="text-decoration-none me-3">
                    <i class="bi bi-facebook fs-4"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="text-decoration-none me-3">
                    <i class="bi bi-twitter fs-4"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="text-decoration-none me-3">
                    <i class="bi bi-instagram fs-4"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" class="text-decoration-none">
                    <i class="bi bi-linkedin fs-4"></i>
                </a>
            </div>
            <p class="mb-0">&copy; {{ date('Y') }} MiProyecto. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
