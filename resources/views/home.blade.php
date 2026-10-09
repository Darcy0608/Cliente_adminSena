@extends('layouts.app')

@section('content')

<style>
    .carousel-item {
        position: relative;
    }

    /* Capa oscura sobre la imagen */
    .carousel-item::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.45);
        top: 0;
        left: 0;
        z-index: 1;
    }

    .carousel-caption {
        z-index: 2;
    }

    .carousel-caption .contenido {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        padding: 20px 30px;
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        display: inline-block;
    }

    .carousel-caption h5 {
        font-size: 2rem;
        font-weight: bold;
        color: white;
    }

    .carousel-caption p {
        font-size: 1.2rem;
        color: white;
    }

    .carousel-img {
        width: 100%;
        height: 550px;
        object-fit: cover;
        object-position: center;
        image-rendering: auto;
    }

    /* ANUNCIOS */
    .anuncio-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        transition: 0.3s;
    }

    .anuncio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.20);
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.20);
    }

    .info-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        transition: 0.3s;
    }

    .anuncio-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        object-position: center;
    }

    .anuncio-card .card-body {
        padding: 20px;
    }

    .titulo-anuncios {
        font-weight: bold;
        color: #16780c;
    }

    /* Estructura base de las tarjetas */
    .portal-card {
        border-radius: 16px;
        transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        background: #ffffff;
    }

    /* Franja de color superior según el rol */
    .portal-badge {
        height: 6px;
        width: 100%;
    }

    /* Caja del ícono circular */
    .icon-box {
        width: 80px;
        height: 80px;
        transition: transform 0.3s ease;
    }

    /* Efectos al pasar el cursor (Hover estilo plataforma Zajuna) */
    .portal-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.12) !important;
    }

    .portal-card:hover .icon-box {
        transform: scale(1.1) rotate(4deg);
    }

    .portal-card:hover .btn-portal {
        color: #ffffff !important;
    }

    /* Colores activos para el botón según la tarjeta */
    .portal-card:hover .btn-outline-success {
        background-color: #16780c !important;
        border-color: #16780c !important;
    }

    .portal-card:hover .btn-outline-primary {
        background-color: #0d6efd !important;
        border-color: #0d6efd !important;
    }

    .portal-card:hover .btn-outline-warning {
        background-color: #ffc107 !important;
        border-color: #ffc107 !important;
        color: #000000 !important;
    }

    /* Estado inicial de las secciones/tarjetas (ocultas y desplazadas hacia abajo) */
    .fade-up-element {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    /* Estado cuando se hace scroll y entran en pantalla */
    .fade-up-element.is-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>


<h1 class="fw-bold text-center mb-4" style="color: #16780c !important;">
    Sistema de Administración SENA
</h1>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('img/img01.jpg') }}" class="carousel-img" alt="Inicio">

            <div class="carousel-caption d-none d-md-block">
                <div class="contenido">
                    <h5>Bienvenido</h5>
                    <p>Sistema de Administración SENA.</p>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('img/img02.jpg') }}" class="d-block w-100" style="height:550px; object-fit:cover;" alt="Cursos">

            <div class="carousel-caption d-none d-md-block">
                <div class="contenido">
                    <h5>Cursos</h5>
                    <p>Consulta todos los cursos registrados.</p>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('img/img03.jpg') }}" class="d-block w-100" style="height:550px; object-fit:cover;" alt="Aprendices">

            <div class="carousel-caption d-none d-md-block">
                <div class="contenido">
                    <h5>Aprendices</h5>
                    <p>Administra aprendices e instructores.</p>
                </div>
            </div>
        </div>

    </div>
    <br>


    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

<br><br>

{{-- SECCIÓN PORTALES Y ROLES (ESTILO ZAJUNA) --}}
<div class="container my-5 fade-up-element">

    <div class="text-center mb-4">
        <h2 class="titulo-anuncios fw-bold" style="color: #16780c;">
            <i class="bi bi-grid-3x3-gap-fill me-2"></i>Portales de Gestión
        </h2>
        <p class="text-muted fs-6">
            Selecciona tu perfil para acceder a las herramientas y módulos correspondientes.
        </p>
    </div>

    <div class="row g-4">

        {{-- PORTAL APRENDICES --}}
        <div class="col-md-4">
            <div class="card portal-card h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="portal-badge bg-success"></div>
                <div class="card-body p-4 d-flex flex-column text-center">
                    <div class="icon-box bg-success-subtle text-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                        <i class="bi bi-mortarboard-fill fs-1"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2">Portal Aprendices</h4>
                    <p class="text-muted flex-grow-1 small">
                        Consulta el estado de tu matrícula, la ficha de formación asignada y la disponibilidad de equipos de cómputo prestados.
                    </p>
                    <hr class="my-3 opacity-25">

                    <!-- BOTÓN QUE ABRE EL MODAL -->
                    <button type="button" class="btn btn-outline-success fw-semibold w-100 py-2 rounded-3 btn-portal" data-bs-toggle="modal" data-bs-target="#modalConsultaAprendiz">
                        Consultar Aprendiz <i class="bi bi-search ms-1"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- PORTAL INSTRUCTORES --}}
        <div class="col-md-4">
            <div class="card portal-card h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="portal-badge bg-primary"></div>
                <div class="card-body p-4 d-flex flex-column text-center">
                    <div class="icon-box bg-primary-subtle text-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-workspace fs-1"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2">Portal Instructores</h4>
                    <p class="text-muted flex-grow-1 small">
                        Gestión de listas de asistencia, asignación de áreas temáticas, horarios de formación y seguimiento académico.
                    </p>
                    <hr class="my-3 opacity-25">

                    <!-- BOTÓN QUE ABRE EL MODAL DE INSTRUCTORES -->
                    <button type="button" class="btn btn-outline-primary fw-semibold w-100 py-2 rounded-3 btn-portal" data-bs-toggle="modal" data-bs-target="#modalConsultaInstructor">
                        Consultar Instructor <i class="bi bi-search ms-1"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- PORTAL ADMINISTRACIÓN --}}
        <div class="col-md-4">
            <div class="card portal-card h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="portal-badge bg-warning"></div>
                <div class="card-body p-4 d-flex flex-column text-center">
                    <div class="icon-box bg-warning-subtle text-warning-emphasis rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                        <i class="bi bi-gear-wide-connected fs-1"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2">Administración</h4>
                    <p class="text-muted flex-grow-1 small">
                        Administración integral de centros de formación, asignación de fichas, sedes y recursos físicos del centro.
                    </p>
                    <hr class="my-3 opacity-25">

                    <!-- BOTÓN QUE ABRE EL MODAL DE ADMINISTRACIÓN -->
                    <button type="button" class="btn btn-outline-warning text-dark fw-semibold w-100 py-2 rounded-3 btn-portal" data-bs-toggle="modal" data-bs-target="#modalConsultaCurso">
                        Consultar Ficha / Curso <i class="bi bi-search ms-1"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>

<br>

{{-- ANUNCIOS --}}
<div class="container my-5 fade-up-element">

    <div class="text-center mb-4">

        <h2 class="titulo-anuncios">
            <i class="bi bi-megaphone-fill"></i>
            Anuncios
        </h2>

        <p class="text-muted">
            Conoce las novedades y noticias más importantes del SENA.
        </p>

    </div>

    <div class="row g-4">

        {{-- ANUNCIO 1 --}}
        <div class="col-md-4">
            <div class="card anuncio-card h-100 shadow">

                <img src="{{ asset('img/anuncio_cursos.jpg') }}" alt="Nuevo curso">

                <div class="card-body">

                    <!-- Muestra el conteo real de Cursos -->
                    <span class="badge bg-success mb-2"> Cursos ({{ $totalCourses ?? 0 }}) </span>

                    <h5 class="card-title"> Nuevos cursos disponibles </h5>

                    <p class="card-text text-muted"> Conoce los nuevos cursos disponibles y consulta
                        la información de cada programa de formación.
                    </p>

                    <a href="{{ route('course.index') }}" class="btn btn-success fw-semibold">Ver Cursos...</a>

                </div>
            </div>
        </div>


        {{-- ANUNCIO 2 --}}
        <div class="col-md-4">
            <div class="card anuncio-card h-100 shadow">

                <img src="{{ asset('img/img001.jpg') }}" alt="Aprendices">

                <div class="card-body">

                    <!-- Muestra el conteo real de Aprendices -->
                    <span class="badge bg-primary mb-2"> Aprendices ({{ $totalApprentices ?? 0 }}) </span>

                    <h5 class="card-title"> Registro de aprendices </h5>

                    <p class="card-text text-muted">
                        Consulta y administra la información de los
                        aprendices registrados en el sistema.
                    </p>

                    <a href="{{ route('apprentice.index') }}" class="btn btn-primary fw-semibold">Ver Aprendices...</a>

                </div>
            </div>
        </div>


        {{-- ANUNCIO 3 --}}
        <div class="col-md-4">
            <div class="card anuncio-card h-100 shadow">

                <img src="{{ asset('img/anuncio_instructores.jpg') }}" alt="Instructores">

                <div class="card-body">

                    <!-- Muestra el conteo real de Instructores -->
                    <span class="badge bg-warning text-dark mb-2"> Instructores ({{ $totalTeachers ?? 0 }}) </span>

                    <h5 class="card-title">
                        Administración de instructores
                    </h5>

                    <p class="card-text text-muted">
                        Consulta la información de los instructores
                        registrados en el sistema.
                    </p>

                    <a href="{{ route('teacher.index') }}" class="btn btn-warning text-dark fw-semibold">Ver Instructores →</a>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECCIÓN ¿QUÉ ES ADMIN SENA? -->
<div id="quienes-somos" class="container my-5 fade-up-element">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 text-center bg-white">
                <div class="d-inline-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle mb-3 mx-auto" style="width: 60px; height: 60px;">
                    <i class="bi bi-info-circle-fill fs-3"></i>
                </div>
                <h2 class="fw-bold mb-3" style="color: #16780c;">¿Qué es Admin SENA?</h2>
                <p class="text-secondary fs-6 leading-relaxed mb-0 mx-auto" style="max-width: 800px;">
                    <strong>Admin SENA</strong> es una plataforma web creada para facilitar la gestión organizada de la información institucional. Permite administrar de manera sencilla y eficiente áreas, centros de formación, asignación de computadores, cursos, instructores y aprendices.
                </p>
            </div>
        </div>
    </div>
</div>


<!-- SECCIÓN INSTITUCIONAL (MISIÓN Y VISIÓN LADO A LADO + IMAGEN LATERAL) -->
<section class="py-5 fade-up-element">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #00324D;">Identidad Institucional</h2>
            <div class="mx-auto bg-success" style="width: 60px; height: 3px;"></div>
        </div>

        <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">
            <div class="row g-0">

                <!-- Columna Izquierda: Imagen del Centro de Formación -->
                <div class="col-lg-5 position-relative d-none d-lg-block">
                    <img src="{{ asset('img/img001.jpg') }}"
                        class="w-100 h-100 position-absolute top-0 start-0"
                        style="object-fit: cover;"
                        alt="SENA Centro de Formación">
                </div>

                <!-- Columna Derecha: Misión y Visión juntas -->
                <div class="col-lg-7 p-4 p-md-5 bg-white">

                    <!-- Misión -->
                    <div class="mb-4 pb-4 border-bottom">
                        <div class="d-flex align-items-center mb-2">
                            <span class="rounded-pill bg-success me-3" style="width: 5px; height: 28px;"></span>
                            <h3 class="fw-bold h4 m-0" style="color: #00324D;">Nuestra Misión</h3>
                        </div>
                        <p class="text-secondary fs-6 mb-0">
                            El SENA está encargado de cumplir la función que le corresponde al Estado de invertir en el desarrollo social y técnico de los trabajadores colombianos, ofreciendo formación profesional integral para su incorporación en actividades productivas que contribuyan al desarrollo del país.
                        </p>
                    </div>

                    <!-- Visión -->
                    <div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="rounded-pill bg-success me-3" style="width: 5px; height: 28px;"></span>
                            <h3 class="fw-bold h4 m-0" style="color: #00324D;">Nuestra Visión</h3>
                        </div>
                        <p class="text-secondary fs-6 mb-0">
                            Para el año 2026, el SENA se consolidará como una entidad líder en formación profesional integral, reconocida nacional e internacionalmente por su aporte a la competitividad, la innovación y el desarrollo tecnológico.
                        </p>
                    </div>

                </div>

            </div>
        </div>

        <!-- SECCIÓN DE ATENCIÓN Y CONTACTO UNIFICADA -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 bg-white p-4 info-card">
                    <div class="row align-items-center text-center text-md-start">

                        <!-- Ícono Principal -->
                        <div class="col-md-3 text-center mb-3 mb-md-0">
                            <div class="d-inline-flex p-3 bg-success-subtle text-success rounded-circle">
                                <i class="bi bi-headset fs-1"></i>
                            </div>
                        </div>

                        <!-- Detalles de Contacto -->
                        <div class="col-md-9">
                            <h4 class="fw-bold mb-3" style="color: #00324D;">Atención y Contacto</h4>
                            <div class="row g-3 text-secondary">
                                <div class="col-sm-6 d-flex align-items-center">
                                    <i class="bi bi-envelope-fill text-success fs-5 me-2"></i>
                                    <div>
                                        <small class="text-muted d-block lh-1">Correo Electrónico</small>
                                        <strong>admin34@example.com</strong>
                                    </div>
                                </div>

                                <div class="col-sm-6 d-flex align-items-center">
                                    <i class="bi bi-telephone-fill text-success fs-5 me-2"></i>
                                    <div>
                                        <small class="text-muted d-block lh-1">Teléfono</small>
                                        <strong>+57 300 000 0000</strong>
                                    </div>
                                </div>

                                <div class="col-12 d-flex align-items-center">
                                    <i class="bi bi-geo-alt-fill text-success fs-5 me-2"></i>
                                    <div>
                                        <small class="text-muted d-block lh-1">Ubicación</small>
                                        <strong>SENA - Centro de Comercio y Servicios</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- MODAL DE BÚSQUEDA DE APRENDIZ -->
<div class="modal fade" id="modalConsultaAprendiz" tabindex="-1" aria-labelledby="modalConsultaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

            <div class="modal-header bg-success text-white py-3">
                <h5 class="modal-title fw-bold" id="modalConsultaLabel">
                    <i class="bi bi-search me-2"></i>Consulta de Aprendiz
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Formulario enviará la búsqueda por GET al controlador -->
            <form action="{{ route('apprentice.index') }}" method="GET">
                <div class="modal-body p-4">
                    <label for="buscarAprendiz" class="form-label fw-semibold text-dark">
                        Número de Identificación o Nombre:
                    </label>
                    <div class="input-group input-group-lg mb-2">
                        <span class="input-group-text bg-light text-success border-end-0">
                            <i class="bi bi-card-text"></i>
                        </span>
                        <input type="text"
                            name="search"
                            id="buscarAprendiz"
                            class="form-control border-start-0 ps-0 fs-6"
                            placeholder="Ej: 12025655489 o Darli"
                            required
                            autocomplete="off">
                    </div>
                    <small class="text-muted d-block mt-2">
                        <i class="bi bi-info-circle me-1"></i>
                        Ingresa el dato para consultar la información detallada, curso y computador asignado.
                    </small>
                </div>

                <div class="modal-footer bg-light border-0 px-4 py-3">
                    <button type="button" class="btn btn-outline-secondary rounded-3 px-3" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success fw-semibold rounded-3 px-4 shadow-sm">
                        Buscar Información <i class="bi bi-arrow-right ms-1"></i>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- MODAL DE BÚSQUEDA DE INSTRUCTOR -->
<div class="modal fade" id="modalConsultaInstructor" tabindex="-1" aria-labelledby="modalInstructorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

            <div class="modal-header bg-primary text-white py-3">
                <h5 class="modal-title fw-bold" id="modalInstructorLabel">
                    <i class="bi bi-person-badge me-2"></i>Consulta de Instructor
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('teacher.index') }}" method="GET">
                <div class="modal-body p-4">
                    <label for="buscarInstructor" class="form-label fw-semibold text-dark">
                        Nombre, Cédula o Correo del Instructor:
                    </label>
                    <div class="input-group input-group-lg mb-2">
                        <span class="input-group-text bg-light text-primary border-end-0">
                            <i class="bi bi-person-bounding-box"></i>
                        </span>
                        <input type="text"
                            name="search"
                            id="buscarInstructor"
                            class="form-control border-start-0 ps-0 fs-6"
                            placeholder="Ej: Fabian o fabi99@gmail.com"
                            required
                            autocomplete="off">
                    </div>
                    <small class="text-muted d-block mt-2">
                        <i class="bi bi-info-circle me-1"></i>
                        Ingresa el dato para consultar la información detallada, área y centro asignado.
                    </small>
                </div>

                <div class="modal-footer bg-light border-0 px-4 py-3">
                    <button type="button" class="btn btn-outline-secondary rounded-3 px-3" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary fw-semibold rounded-3 px-4 shadow-sm">
                        Buscar Instructor <i class="bi bi-arrow-right ms-1"></i>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- MODAL DE BÚSQUEDA DE CURSO / FICHA -->
<div class="modal fade" id="modalConsultaCurso" tabindex="-1" aria-labelledby="modalCursoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

            <div class="modal-header bg-warning text-dark py-3">
                <h5 class="modal-title fw-bold" id="modalCursoLabel">
                    <i class="bi bi-journal-bookmark-fill me-2"></i>Consulta de Ficha / Curso
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('course.index') }}" method="GET">
                <div class="modal-body p-4">
                    <label for="buscarCurso" class="form-label fw-semibold text-dark">
                        Nombre del Curso o Número de Ficha:
                    </label>
                    <div class="input-group input-group-lg mb-2">
                        <span class="input-group-text bg-light text-warning-emphasis border-end-0">
                            <i class="bi bi-hash"></i>
                        </span>
                        <input type="text"
                            name="search"
                            id="buscarCurso"
                            class="form-control border-start-0 ps-0 fs-6"
                            placeholder="Ej: ADSO o 2670123"
                            required
                            autocomplete="off">
                    </div>
                    <small class="text-muted d-block mt-2">
                        <i class="bi bi-info-circle me-1"></i>
                        Ingresa el dato para consultar la información detallada del programa y sus aprendices o instructores asociados.
                    </small>
                </div>

                <div class="modal-footer bg-light border-0 px-4 py-3">
                    <button type="button" class="btn btn-outline-secondary rounded-3 px-3" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning text-dark fw-semibold rounded-3 px-4 shadow-sm">
                        Buscar Ficha <i class="bi bi-arrow-right ms-1"></i>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- SCRIPT PARA ANIMACIONES EN SCROLL (FADE-UP) --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = {
            root: null,
            threshold: 0.15
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-up-element').forEach(el => {
            observer.observe(el);
        });
    });
</script>

@endsection