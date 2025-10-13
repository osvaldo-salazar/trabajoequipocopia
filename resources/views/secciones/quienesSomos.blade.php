@extends('base.padre')

@section('titulo', 'Quienes somos')

@section('hero')
    <!-- Hero Section -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-white" style="background: linear-gradient(to right, #ff758c, #ff7eb3); height: 45vh;">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Bienvenido al hero de quienes somos</h1>
            <p class="lead mb-4">Holaaaa</p>
        </div>
    </section>
@endsection

@section('contenido')
<section class="py-5 bg-light" id="about-us">
    <div class="container">
        <h2 class="text-center mb-4">Quiénes Somos</h2>
        <p class="text-center mb-4">Somos un equipo comprometido con la difusión de noticias y contenido de calidad para nuestra comunidad.</p>
        <div class="row text-center">
            <div class="col-md-4 mb-3">
                <i class="bi bi-people fs-1 mb-2"></i>
                <h5>Equipo Profesional</h5>
                <p>Contamos con un equipo multidisciplinario dedicado a ofrecer la mejor información.</p>
            </div>
            <div class="col-md-4 mb-3">
                <i class="bi bi-journal-text fs-1 mb-2"></i>
                <h5>Contenido Actualizado</h5>
                <p>Mantenemos nuestras noticias y artículos siempre frescos y relevantes.</p>
            </div>
            <div class="col-md-4 mb-3">
                <i class="bi bi-award fs-1 mb-2"></i>
                <h5>Calidad Garantizada</h5>
                <p>Nos enfocamos en la calidad y veracidad de cada publicación que compartimos.</p>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-light" id="contact">
    <div class="container">
        <h2 class="text-center mb-4">Contáctanos</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Tu correo">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Tu mensaje"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection