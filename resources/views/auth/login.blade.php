@extends('layouts.app')

@section('content')
<style>
    .login-sena {
        --sena-green: #39a900;
        --sena-green-dark: #16780c;
        --ink: #14210f;
        --muted: #5f6b5a;
        --line: #dfe5dc;
    }

    .login-sena .auth-card {
        border-radius: 1.5rem;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 20px 50px rgba(20, 33, 15, .15);
    }

    /*  Panel izquierdo  */
    .login-sena .auth-aside {
        color: #fff;
        padding: 3rem 2.75rem;
        background:
            radial-gradient(circle at 15% 10%, rgba(255, 255, 255, .22), transparent 45%),
            linear-gradient(155deg, #39a900 0%, #2f9600 45%, #16780c 100%);
    }

    .login-sena .brand-mark {
        width: 3.25rem;
        height: 3.25rem;
        border-radius: 1rem;
        background: rgba(255, 255, 255, .18);
        border: 1px solid rgba(255, 255, 255, .25);
        font-size: 1.5rem;
    }

    .login-sena .aside-title {
        font-size: clamp(1.75rem, 2.6vw, 2.5rem);
        font-weight: 800;
        line-height: 1.12;
        letter-spacing: -.02em;
    }

    .login-sena .aside-text {
        font-size: 1.05rem;
        color: rgba(255, 255, 255, .9);
    }

    .login-sena .feature-icon {
        flex: none;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: .75rem;
        background: rgba(255, 255, 255, .16);
    }

    /* Formulario */
    .login-sena .auth-form-wrap {
        width: 100%;
        max-width: 420px;
    }

    .login-sena .form-title {
        font-size: 1.9rem;
        font-weight: 800;
        letter-spacing: -.02em;
        color: var(--ink);
    }

    .login-sena .btn-google {
        height: 3.1rem;
        border: 1px solid var(--line);
        border-radius: .75rem;
        background: #fff;
        font-weight: 600;
        color: var(--ink);
        box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
    }

    .login-sena .btn-google:hover {
        background: #f6f8f5;
        border-color: #cbd5c7;
        color: var(--ink);
    }

    .login-sena .divider {
        display: flex;
        align-items: center;
        gap: 1rem;
        color: var(--muted);
        font-size: .9rem;
    }

    .login-sena .divider::before,
    .login-sena .divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background: var(--line);
    }

    .login-sena .field {
        position: relative;
    }

    .login-sena .field .bi-lead {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #7b8676;
        pointer-events: none;
    }

    .login-sena .field .form-control {
        height: 3.1rem;
        padding-left: 2.75rem;
        border-radius: .75rem;
        border-color: var(--line);
    }

    .login-sena .field .form-control.has-toggle {
        padding-right: 3rem;
    }

    .login-sena .field .form-control:focus {
        border-color: var(--sena-green);
        box-shadow: 0 0 0 .25rem rgba(57, 169, 0, .18);
    }

    .login-sena .toggle-pass {
        position: absolute;
        right: .5rem;
        top: 50%;
        transform: translateY(-50%);
        width: 2.4rem;
        height: 2.4rem;
        border: 0;
        border-radius: .5rem;
        background: transparent;
        color: #7b8676;
    }

    .login-sena .toggle-pass:hover {
        color: var(--ink);
    }

    .login-sena .toggle-pass:focus-visible {
        outline: 2px solid var(--sena-green);
    }

    .login-sena .link-sena {
        color: var(--sena-green-dark);
        font-weight: 600;
        text-decoration: none;
    }

    .login-sena .link-sena:hover {
        text-decoration: underline;
    }

    .login-sena .form-check-input:checked {
        background-color: var(--sena-green);
        border-color: var(--sena-green);
    }

    .login-sena .form-check-input:focus {
        border-color: var(--sena-green);
        box-shadow: 0 0 0 .25rem rgba(57, 169, 0, .18);
    }

    .login-sena .btn-sena {
        height: 3.1rem;
        border: 0;
        border-radius: .75rem;
        background: var(--sena-green);
        color: #fff;
        font-weight: 700;
        transition: background-color .2s ease;
    }

    .login-sena .btn-sena:hover,
    .login-sena .btn-sena:focus-visible {
        background: var(--sena-green-dark);
        color: #fff;
    }
</style>

<div class="container login-sena py-lg-4">
    <div class="auth-card">
        <div class="row g-0">

            {{-- Panel izquierdo --}}
            <aside class="col-lg-6 d-none d-lg-flex flex-column justify-content-between auth-aside">
                <div class="d-flex align-items-center gap-3">
                    <span class="bg-white rounded p-1 me-2">

                        <img src="https://pautonoticias.com/sites/default/files/Article/sena-colombia-logo-green39a900png-20250120.png"
                            alt="Logo SENA"
                            width="50"
                            height="50"
                            class="img-fluid">

                    </span>
                    <div>
                        <div class="fw-bold fs-5 lh-1">Admin SENA</div>
                        <small class="opacity-75">Servicio Nacional de Aprendizaje</small>
                    </div>
                </div>

                <div class="my-5">
                    <h2 class="aside-title mb-3">Bienvenido de nuevo al SENA</h2>
                    <p class="aside-text mb-4">
                        Ingresa con tu cuenta para consultar cursos, instructores, aprendices y realizar tus gestiones en un solo lugar.
                    </p>

                    <ul class="list-unstyled d-grid gap-3 mb-0">
                        <li class="d-flex align-items-center gap-3">
                            <span class="feature-icon d-flex align-items-center justify-content-center"><i class="bi bi-shield-check"></i></span>
                            Tu información protegida con acceso seguro
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <span class="feature-icon d-flex align-items-center justify-content-center"><i class="bi bi-people"></i></span>
                            Una sola cuenta para aprendices, instructores y personal
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <span class="feature-icon d-flex align-items-center justify-content-center"><i class="bi bi-journal-check"></i></span>
                            Consulta y gestiona tus trámites sin desplazarte
                        </li>
                    </ul>
                </div>

                <small class="opacity-75">© {{ date('Y') }} Servicio Nacional de Aprendizaje. Todos los derechos reservados.</small>
            </aside>

            {{-- Formulario --}}
            <div class="col-lg-6 d-flex align-items-center justify-content-center px-4 px-md-5 py-5">
                <div class="auth-form-wrap">

                    <h1 class="form-title mb-1">Iniciar sesión</h1>
                    <p class="text-secondary mb-4">Ingresa tus datos para continuar.</p>

                    {{-- Google: solo aparece si existe la ruta (requiere Laravel Socialite) --}}
                    @if (Route::has('auth.google'))
                    <a href="{{ route('auth.google') }}" class="btn btn-google w-100 d-flex align-items-center justify-content-center gap-2 mb-4">
                        <svg width="18" height="18" viewBox="0 0 48 48" aria-hidden="true">
                            <path fill="#FFC107" d="M43.6 20.1H42V20H24v8h11.3C33.7 32.7 29.2 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.8 1.2 8 3l5.7-5.7C34 6.1 29.3 4 24 4 13 4 4 13 4 24s9 20 20 20 20-9 20-20c0-1.3-.1-2.6-.4-3.9z" />
                            <path fill="#FF3D00" d="M6.3 14.7l6.6 4.8C14.7 15.1 19 12 24 12c3.1 0 5.8 1.2 8 3l5.7-5.7C34 6.1 29.3 4 24 4 16.3 4 9.7 8.3 6.3 14.7z" />
                            <path fill="#4CAF50" d="M24 44c5.2 0 9.9-2 13.4-5.2l-6.2-5.2C29.2 35.1 26.7 36 24 36c-5.2 0-9.6-3.3-11.3-8l-6.5 5C9.5 39.6 16.2 44 24 44z" />
                            <path fill="#1976D2" d="M43.6 20.1H42V20H24v8h11.3c-.8 2.2-2.2 4.2-4.1 5.6l6.2 5.2C37 39.2 44 34 44 24c0-1.3-.1-2.6-.4-3.9z" />
                        </svg>
                        Continuar con Google
                    </a>

                    <div class="divider mb-4"><span>o con tu correo</span></div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- Correo --}}
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Correo electrónico</label>
                            <div class="field">
                                <i class="bi bi-envelope bi-lead"></i>
                                <input id="email" type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}"
                                    placeholder="nombre@correo.com"
                                    required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                            <div class="invalid-feedback d-block" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Contraseña --}}
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <label for="password" class="form-label fw-semibold">Contraseña</label>
                                <a href="{{ url('/password/reset') }}" class="link-sena small">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="field">
                                <i class="bi bi-lock bi-lead"></i>
                                <input id="password" type="password" name="password"
                                    class="form-control has-toggle @error('password') is-invalid @enderror"
                                    placeholder="Tu contraseña"
                                    required autocomplete="current-password">
                                <button type="button" class="toggle-pass" id="togglePass" aria-label="Mostrar contraseña">
                                    <i class="bi bi-eye" id="togglePassIcon"></i>
                                </button>
                            </div>
                            @error('password')
                            <div class="invalid-feedback d-block" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Recordar --}}
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-secondary" for="remember">Mantener sesión iniciada</label>
                        </div>

                        <button type="submit" class="btn btn-sena w-100 d-flex align-items-center justify-content-center gap-2">
                            Ingresar <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>

                    <p class="text-center text-secondary mt-4 pt-3 mb-0 border-top">
                        ¿No tienes una cuenta?
                        <a href="{{ url('/register') }}" class="link-sena">Regístrate aquí</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Mostrar / ocultar contraseña
    (function() {
        const input = document.getElementById('password');
        const btn = document.getElementById('togglePass');
        const icon = document.getElementById('togglePassIcon');

        btn.addEventListener('click', function() {
            const show = input.type === 'password';
            input.type = show ? 'text' : 'password';
            icon.className = show ? 'bi bi-eye-slash' : 'bi bi-eye';
            btn.setAttribute('aria-label', show ? 'Ocultar contraseña' : 'Mostrar contraseña');
        });
    })();
</script>
@endsection