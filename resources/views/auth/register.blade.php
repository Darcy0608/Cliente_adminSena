@extends('layouts.app')

@section('content')
<style>
    .register-sena {
        --sena-green: #39a900;
        --sena-green-dark: #16780c;
        --ink: #14210f;
        --muted: #5f6b5a;
        --line: #dfe5dc;
    }

    .register-sena .auth-card {
        border-radius: 1.5rem;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 20px 50px rgba(20, 33, 15, .15);
    }

    /* ---------- Panel izquierdo ---------- */
    .register-sena .auth-aside {
        color: #fff;
        padding: 3rem 2.75rem;
        background:
            radial-gradient(circle at 15% 10%, rgba(255, 255, 255, .22), transparent 45%),
            linear-gradient(155deg, #39a900 0%, #2f9600 45%, #16780c 100%);
    }

    .register-sena .brand-mark {
        width: 3.25rem;
        height: 3.25rem;
        border-radius: 1rem;
        background: rgba(255, 255, 255, .18);
        border: 1px solid rgba(255, 255, 255, .25);
        font-size: 1.5rem;
    }

    .register-sena .aside-title {
        font-size: clamp(1.75rem, 2.6vw, 2.5rem);
        font-weight: 800;
        line-height: 1.12;
        letter-spacing: -.02em;
    }

    .register-sena .aside-text {
        font-size: 1.05rem;
        color: rgba(255, 255, 255, .9);
    }

    .register-sena .feature-icon {
        flex: none;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: .75rem;
        background: rgba(255, 255, 255, .16);
    }

    /* ---------- Formulario ---------- */
    .register-sena .auth-form-wrap {
        width: 100%;
        max-width: 420px;
    }

    .register-sena .form-title {
        font-size: 1.9rem;
        font-weight: 800;
        letter-spacing: -.02em;
        color: var(--ink);
    }

    .register-sena .btn-google {
        height: 3.1rem;
        border: 1px solid var(--line);
        border-radius: .75rem;
        background: #fff;
        font-weight: 600;
        color: var(--ink);
        box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
    }

    .register-sena .btn-google:hover {
        background: #f6f8f5;
        border-color: #cbd5c7;
        color: var(--ink);
    }

    .register-sena .divider {
        display: flex;
        align-items: center;
        gap: 1rem;
        color: var(--muted);
        font-size: .9rem;
    }

    .register-sena .divider::before,
    .register-sena .divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background: var(--line);
    }

    .register-sena .field {
        position: relative;
    }

    .register-sena .field .bi-lead {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #7b8676;
        pointer-events: none;
    }

    .register-sena .field .form-control {
        height: 3.1rem;
        padding-left: 2.75rem;
        border-radius: .75rem;
        border-color: var(--line);
    }

    .register-sena .field .form-control.has-toggle {
        padding-right: 3rem;
    }

    .register-sena .field .form-control:focus {
        border-color: var(--sena-green);
        box-shadow: 0 0 0 .25rem rgba(57, 169, 0, .18);
    }

    .register-sena .toggle-pass {
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

    .register-sena .toggle-pass:hover {
        color: var(--ink);
    }

    .register-sena .toggle-pass:focus-visible {
        outline: 2px solid var(--sena-green);
    }

    .register-sena .link-sena {
        color: var(--sena-green-dark);
        font-weight: 600;
        text-decoration: none;
    }

    .register-sena .link-sena:hover {
        text-decoration: underline;
    }

    .register-sena .btn-sena {
        height: 3.1rem;
        border: 0;
        border-radius: .75rem;
        background: var(--sena-green);
        color: #fff;
        font-weight: 700;
        transition: background-color .2s ease;
    }

    .register-sena .btn-sena:hover,
    .register-sena .btn-sena:focus-visible {
        background: var(--sena-green-dark);
        color: #fff;
    }

    /* ---------- Selector de rol ---------- */
    .register-sena .role-option {
        position: relative;
        display: block;
        height: 100%;
    }

    .register-sena .role-option input {
        position: absolute;
        opacity: 0;
        inset: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        cursor: pointer;
    }

    .register-sena .role-card {
        display: block;
        height: 100%;
        min-height: 7.5rem;
        padding: .9rem .5rem;
        border: 1px solid var(--line);
        border-radius: .75rem;
        background: #fff;
        text-align: center;
        line-height: 1.25;
        overflow-wrap: anywhere;
        transition: border-color .2s ease, background-color .2s ease;
    }

    .register-sena .role-card i {
        display: block;
        font-size: 1.3rem;
        margin-bottom: .25rem;
        color: #7b8676;
    }

    .register-sena .role-card strong {
        display: block;
        font-size: .9rem;
        color: var(--ink);
    }

    .register-sena .role-card small {
        display: block;
        margin-top: .15rem;
        font-size: .75rem;
        color: var(--muted);
    }

    .register-sena .role-option:hover .role-card {
        border-color: #b9c8b3;
    }

    .register-sena .role-option input:checked+.role-card {
        border-color: var(--sena-green);
        background: rgba(57, 169, 0, .08);
    }

    .register-sena .role-option input:checked+.role-card i {
        color: var(--sena-green-dark);
    }

    .register-sena .role-option input:focus-visible+.role-card {
        box-shadow: 0 0 0 .25rem rgba(57, 169, 0, .18);
        border-color: var(--sena-green);
    }

    .register-sena .role-option input:disabled {
        cursor: not-allowed;
    }

    .register-sena .role-option input:disabled+.role-card {
        opacity: .55;
        background: #f6f8f5;
    }

    .register-sena .role-option:hover input:disabled+.role-card {
        border-color: var(--line);
    }
</style>

<div class="container register-sena py-lg-4">
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
                        <div class="fw-bold fs-5 lh-1">SENA</div>
                        <small class="opacity-75">Servicio Nacional de Aprendizaje</small>
                    </div>
                </div>

                <div class="my-5">
                    <h2 class="aside-title mb-3">Únete al portal del SENA</h2>
                    <p class="aside-text mb-4">
                        Crea tu cuenta en unos segundos y accede a cursos, instructores, aprendices y tus gestiones en un solo lugar.
                    </p>

                    <ul class="list-unstyled d-grid gap-3 mb-0">
                        <li class="d-flex align-items-center gap-3">
                            <span class="feature-icon d-flex align-items-center justify-content-center"><i class="bi bi-lightning-charge"></i></span>
                            Registro rápido, solo con tus datos básicos
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <span class="feature-icon d-flex align-items-center justify-content-center"><i class="bi bi-shield-check"></i></span>
                            Tu información protegida con acceso seguro
                        </li>
                    </ul>
                </div>

                <small class="opacity-75">© {{ date('Y') }} Servicio Nacional de Aprendizaje. Todos los derechos reservados.</small>
            </aside>

            {{-- Formulario --}}
            <div class="col-lg-6 d-flex align-items-center justify-content-center px-4 px-md-5 py-5">
                <div class="auth-form-wrap">

                    <h1 class="form-title mb-1">Crea tu cuenta</h1>
                    <p class="text-secondary mb-4">Regístrate en el portal SENA.</p>

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

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Nombre completo --}}
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nombre completo</label>
                            <div class="field">
                                <i class="bi bi-person bi-lead"></i>
                                <input id="name" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}"
                                    placeholder="Tu nombre completo"
                                    required autocomplete="name" autofocus>
                            </div>
                            @error('name')
                            <div class="invalid-feedback d-block" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Correo --}}
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Correo electrónico</label>
                            <div class="field">
                                <i class="bi bi-envelope bi-lead"></i>
                                <input id="email" type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}"
                                    placeholder="nombre@correo.com"
                                    required autocomplete="email">
                            </div>
                            @error('email')
                            <div class="invalid-feedback d-block" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Contraseña --}}
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Contraseña</label>
                            <div class="field">
                                <i class="bi bi-lock bi-lead"></i>
                                <input id="password" type="password" name="password"
                                    class="form-control has-toggle @error('password') is-invalid @enderror"
                                    placeholder="Mínimo 8 caracteres"
                                    required autocomplete="new-password">
                                <button type="button" class="toggle-pass" data-target="password" aria-label="Mostrar contraseña">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            @error('password')
                            <div class="invalid-feedback d-block" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Confirmar contraseña --}}
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label fw-semibold">Confirmar contraseña</label>
                            <div class="field">
                                <i class="bi bi-lock bi-lead"></i>
                                <input id="password_confirmation" type="password" name="password_confirmation"
                                    class="form-control has-toggle"
                                    placeholder="Repite tu contraseña"
                                    required autocomplete="new-password">
                                <button type="button" class="toggle-pass" data-target="password_confirmation" aria-label="Mostrar contraseña">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Rol --}}
                        <fieldset class="mb-4">
                            <legend class="form-label fw-semibold fs-6 mb-2">Selecciona tu rol</legend>
                            <div class="row g-2">
                                <div class="col-4">
                                    {{-- El rol de administrador no se puede elegir al registrarse --}}
                                    <label class="role-option">
                                        <input type="radio" name="role" value="administrador" disabled>
                                        <span class="role-card">
                                            <i class="bi bi-shield-check"></i>
                                            <strong>Administrador</strong>
                                            <small>Solo por invitación</small>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="role-option">
                                        <input type="radio" name="role" value="instructor"
                                            {{ old('role') === 'instructor' ? 'checked' : '' }} required>
                                        <span class="role-card">
                                            <i class="bi bi-person"></i>
                                            <strong>Instructor</strong>
                                            <small>Formación de aprendices</small>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="role-option">
                                        <input type="radio" name="role" value="aprendiz"
                                            {{ old('role', 'aprendiz') === 'aprendiz' ? 'checked' : '' }} required>
                                        <span class="role-card">
                                            <i class="bi bi-mortarboard"></i>
                                            <strong>Aprendiz</strong>
                                            <small>Proceso de formación</small>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            @error('role')
                            <div class="invalid-feedback d-block" role="alert">{{ $message }}</div>
                            @enderror
                        </fieldset>

                        <button type="submit" class="btn btn-sena w-100 d-flex align-items-center justify-content-center gap-2">
                            Crear cuenta <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>

                    <p class="text-center text-secondary mt-4 pt-3 mb-0 border-top">
                        ¿Ya tienes una cuenta?
                        <a href="{{ route('login') }}" class="link-sena">Inicia sesión</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Mostrar / ocultar contraseña en ambos campos
    document.querySelectorAll('.register-sena .toggle-pass').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const input = document.getElementById(btn.dataset.target);
            const icon = btn.querySelector('i');
            const show = input.type === 'password';

            input.type = show ? 'text' : 'password';
            icon.className = show ? 'bi bi-eye-slash' : 'bi bi-eye';
            btn.setAttribute('aria-label', show ? 'Ocultar contraseña' : 'Mostrar contraseña');
        });
    });
</script>
@endsection