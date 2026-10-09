<style>
    .buscador-sena {
        border-radius: 8px;
        overflow: hidden;
        border: 2px solid #39a900;
        background-color: #ffffff;
        max-width: 290px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3) !important;
    }

    .buscador-sena:hover,
    .buscador-sena:focus-within {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4) !important;
        border-color: #ffffff;
        transform: translateY(-1px);
    }

    .buscador-sena .form-control {
        background-color: #ffffff;
        color: #212529;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .buscador-sena .form-control::placeholder {
        color: #6c757d;
    }

    .buscador-sena .form-control:focus {
        box-shadow: none;
        background-color: #ffffff;
    }

    .buscador-sena .btn-search-sena {
        background-color: #349503;
        color: #ffffff;
        border: none;
        padding: 0 16px;
        font-size: 1rem;
        transition: background-color 0.2s ease;
    }

    .buscador-sena .btn-search-sena:hover {
        background-color: #369506d8;
        color: #ffffff;
    }

    .nav-link-pill {
        color: rgba(255, 255, 255, 0.95) !important;
        padding: 0.5rem 1rem !important;
        border-radius: 50rem;
        transition: all 0.25s ease-in-out;
    }

    .nav-link-pill:hover,
    .nav-link-pill:focus,
    .nav-link-pill.show {
        color: #062f39 !important;
        background-color: rgb(249, 249, 249);
        transform: translateY(-1px);
    }

    .nav-link-pill:hover *,
    .nav-link-pill:focus *,
    .nav-link-pill.show * {
        color: #00324D !important;
    }

    /* Estilos para el menú desplegable */
    .dropdown-menu {
        border-radius: 1rem !important;
        padding: 0.5rem !important;
        /* Bordes redondeados de la tarjeta */
        border: none !important;
    }

    /* Estado normal de los items */
    .dropdown-menu .dropdown-item {
        border-radius: 0.5rem !important;
        padding: 0.6rem 1rem !important;
        font-weight: 500;
        transition: all 0.2s ease-in-out;
    }

    /* Efecto al pasar el cursor (:hover) y al enfocar (:active / :focus) */
    .dropdown-menu .dropdown-item:hover,
    .dropdown-menu .dropdown-item:focus,
    .dropdown-menu .dropdown-item:active {
        background-color: #16780c !important;
        color: #ffffff !important;
        transform: translateX(3px);
        /* Desplazamiento a la derecha */
    }
</style>



<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #16780c">

    <div class="container-fluid">

        <!-- LOGO + ADMIN SENA -->
        <a class="navbar-brand nav-link-pill d-flex align-items-center nav-link-pill"
            href="{{ route('home') }}">


            <span class="bg-white rounded p-1 me-2">

                <img src="https://pautonoticias.com/sites/default/files/Article/sena-colombia-logo-green39a900png-20250120.png"
                    alt="Logo SENA"
                    width="50"
                    height="50"
                    class="img-fluid">

            </span>

            <span class="text-white fw-bold"> Admin SENA </span>
        </a>



        <!-- BOTÓN RESPONSIVE -->
        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <!-- OPCIONES DE LA IZQUIERDA -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">

                <!-- ADMINISTRACIÓN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold nav-link-pill d-flex align-items-center" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-sliders-h me-2 opacity-75"></i>Administración
                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item" href="{{ route('area.index') }}"> Ver Áreas </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('course.index') }}"> Ver Cursos </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('apprentice.index') }}"> Ver Aprendices </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('teacher.index') }}"> Ver Instructores </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('computer.index') }}"> Ver Computadores </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('training-center.index') }}"> Ver Centros de Formación</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('training_environment.index') }}"> Ver Ambientes de Formación</a>
                        </li>
                    </ul>
                </li>

                <!-- QUIÉNES SOMOS -->
                <li class="nav-item">
                    <a class="nav-link fw-bold nav-link-pill d-flex align-items-center"
                        href="{{ route('home') }}#quienes-somos">
                        Quiénes somos?
                    </a>
                </li>
            </ul>


            <!-- OPCIONES DE LA DERECHA -->
            <ul class="navbar-nav ms-auto align-items-center">

                <!-- BUSCADOR -->
                <form class="d-flex my-1"
                    role="search"
                    method="GET"
                    action="{{ route('global.search') }}">

                    <div class="input-group buscador-sena shadow">
                        <input class="form-control border-0 px-3"
                            type="search"
                            name="query"
                            value="{{ request('query') }}"
                            placeholder="Buscar módulo o registro..."
                            aria-label="Buscar"
                            required>

                        <button class="btn btn-search-sena" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>


                @guest
                <!-- SE MUESTRA SI NO SE HA INICIADO SESIÓN -->
                <li class="nav-item">
                    <a class="nav-link text-white nav-link-pill fw-bold"
                        href="{{ route('login') }}">
                        Iniciar sesión
                    </a>
                </li>
                @endguest

                @guest
                <!-- MOSTRAR SI NO SE A REGISTRADO -->
                <li class="nav-item">
                    <a class="nav-link text-white nav-link-pill fw-bold"
                        href="{{ route('register') }}">
                        Registrarse
                    </a>
                </li>
                @endguest

                <!-- PERFIL -->
                <li class="nav-item ">

                    <a class="nav-link text-white"
                        href="#">
                        Perfil
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>