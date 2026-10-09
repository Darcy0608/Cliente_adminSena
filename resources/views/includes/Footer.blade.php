<footer class="bg-dark text-white pt-5 pb-4 mt-5">
    <div class="container text-center text-md-start">
        <div class="row text-center text-md-start">

            <!-- Columna 1: Nombre del Sistema y Descripción -->
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-3 fw-bold text-success">
                    <i class="bi bi-building-fill me-2"></i>Admin SENA
                </h5>
                <p class="text-secondary small">
                    Sistema de gestión integral para la administración de fichas de formación, instructores, aprendices y recursos físicos del centro.
                </p>
            </div>

            <!-- Columna 2: Enlaces Rápidos -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-3 fw-bold text-success">Módulos</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="{{ route('course.index') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right text-success me-1"></i> Cursos / Fichas</a></li>
                    <li class="mb-2"><a href="{{ route('apprentice.index') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right text-success me-1"></i> Aprendices</a></li>
                    <li class="mb-2"><a href="{{ route('teacher.index') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right text-success me-1"></i> Instructores</a></li>
                    <li class="mb-2"><a href="{{ route('computer.index') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right text-success me-1"></i> Equipos de Cómputo</a></li>
                </ul>
            </div>

            <!-- Columna 3: Contacto -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 small">
                <h5 class="text-uppercase mb-3 fw-bold text-success">Contacto</h5>
                <p class="text-secondary mb-2"><i class="bi bi-geo-alt-fill text-success me-2"></i> Centro de Formación SENA</p>
                <p class="text-secondary mb-2"><i class="bi bi-envelope-fill text-success me-2"></i> admin34@example.com</p>
                <p class="text-secondary mb-2"><i class="bi bi-telephone-fill text-success me-2"></i> +57 300 000 0000</p>
            </div>

        </div>

        <hr class="mb-4 mt-4 text-secondary">

        <!-- Fila Inferior: Copyright y Redes Sociales -->
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8 text-center text-md-start">
                <p class="text-secondary small mb-0">
                    © {{ date('Y') }} <strong>Sistema de Administración SENA</strong> — Versión 1.0
                </p>
            </div>

            <div class="col-md-5 col-lg-4 text-center text-md-end">
                <div class="d-inline-flex gap-3 fs-5">
                    <a href="#" class="text-secondary hover-success"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-secondary hover-success"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-secondary hover-success"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-secondary hover-success"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>

    </div>
</footer>