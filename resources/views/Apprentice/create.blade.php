@extends('layouts.app')

@section('content')

<h1 class="fw-bold text-success mb-4" style="color: #16780c !important;">
    Formulario Registrar Aprendices
</h1>

<!-- Contenedor principal con diseño de tarjeta -->
<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <!-- Numero de Identificacion -->
        <div class="mb-3">
            <label for="Identity_card" class="form-label fw-semibold">Número de identificación:</label>
            <input type="text"
                class="form-control"
                id="Identity_card"
                name="Identity_card"
                value="{{ old('Identity_card') }}"
                placeholder="Ej: 1002345678"
                required>
        </div>

        <!-- Nombre Completo -->
        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Nombre:</label>
            <input type="text"
                class="form-control"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Ej: Carlos Pérez"
                required>
        </div>

        <!-- Correo Electronico -->
        <div class="mb-3">
            <label for="email" class="form-label fw-semibold">Email:</label>
            <input type="email"
                class="form-control"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="ejemplo@correo.com"
                required>
        </div>

        <!-- Teléfono -->
        <div class="mb-3">
            <label for="cell_number" class="form-label fw-semibold">Número de teléfono:</label>
            <input type="tel"
                class="form-control"
                id="cell_number"
                name="cell_number"
                value="{{ old('cell_number') }}"
                placeholder="Ej: 3001234567"
                required>
        </div>

        <!-- Seleccion de Curso -->
        <div class="mb-3">
            <label for="course_id" class="form-label fw-semibold">Curso:</label>
            <select name="course_id" id="course_id" class="form-select" required>
                <option value="">Seleccione un curso</option>
                @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                    {{ $course->course_number }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Seleccion de computador -->
        <div class="mb-3">
            <label for="computer_id" class="form-label fw-semibold">Equipo:</label>
            <select name="computer_id" id="computer_id" class="form-select" required>
                <option value="">Seleccione un equipo</option>
                @foreach($computers as $computer)
                <option value="{{ $computer->id }}" {{ old('computer_id') == $computer->id ? 'selected' : '' }}>
                    {{ $computer->number }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex gap-2 mt-4">
            <button type="submit" class="btn btn-success fw-semibold px-4 rounded-3">
                Enviar Formulario
            </button>

            <a href="{{ route('apprentice.index') }}" class="btn btn-outline-secondary rounded-3 px-3">
                Cancelar
            </a>
        </div>

    </form>
</div>

@endsection