@extends('layouts.app')

@section('content')

<h1 class="fw-bold text-success mb-4" style="color: #16780c !important;">
    Formulario Registrar Ambiente
</h1>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">

    <form action="{{ route('training_environment.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">
                Nombre del ambiente:
            </label>

            <input type="text"
                class="form-control"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Ej: Ambiente de Sistemas 301"
                required>
        </div>
        
        <div class="mb-3">
            <label for="code" class="form-label fw-semibold">
                Código:
            </label>

            <input type="text"
                class="form-control"
                id="code"
                name="code"
                value="{{ old('code') }}"
                placeholder="Ej: AMB-301"
                required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label fw-semibold">
                Tipo de ambiente:
            </label>

            <select name="type" id="type" class="form-select" required>

                <option value="">Seleccione un tipo</option>

                <option value="Aula" {{ old('type') == 'Aula' ? 'selected' : '' }}> Aula </option>
                <option value="Laboratorio" {{ old('type') == 'Laboratorio' ? 'selected' : '' }}> Laboratorio </option>
                <option value="Taller" {{ old('type') == 'Taller' ? 'selected' : '' }}> Taller </option>
                <option value="Sala de informática" {{ old('type') == 'Sala de informática' ? 'selected' : '' }}> Sala de informática </option>
                <option value="Auditorio" {{ old('type') == 'Auditorio' ? 'selected' : '' }}> Auditorio </option>

            </select>
        </div>

        <div class="mb-3">
            <label for="capacity" class="form-label fw-semibold">
                Capacidad:
            </label>

            <input type="number"
                class="form-control"
                id="capacity"
                name="capacity"
                value="{{ old('capacity') }}"
                placeholder="Ej: 30"
                min="1"
                required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label fw-semibold">
                Ubicación:
            </label>

            <input type="text"
                class="form-control"
                id="location"
                name="location"
                value="{{ old('location') }}"
                placeholder="Ej: Centro de formación - Bloque A"
                required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label fw-semibold">
                Estado:
            </label>

            <select name="status" id="status" class="form-select" required>
                <option value="">Seleccione un estado</option>

                <option value="Disponible"{{ old('status') == 'Disponible' ? 'selected' : '' }}> Disponible </option>
                <option value="Ocupado" {{ old('status') == 'Ocupado' ? 'selected' : '' }}> Ocupado </option>
                <option value="Mantenimiento" {{ old('status') == 'Mantenimiento' ? 'selected' : '' }}> Mantenimiento </option>
                <option value="Inactivo" {{ old('status') == 'Inactivo' ? 'selected' : '' }}> Inactivo </option>
            </select>
        </div>

        <div class="mb-3">
            <label for="urlFoto" class="form-label fw-semibold">
                Foto del Ambiente:
            </label>

            <input type="file"
                class="form-control"
                id="urlFoto"
                name="urlFoto"
                accept="image/*">
        </div>

        <!-- Botones -->
        <div class="d-flex gap-2 mt-4">

            <button type="submit"
                class="btn btn-success fw-semibold px-4 rounded-3">
                Enviar Formulario
            </button>

            <a href="{{ route('training_environment.index') }}"
                class="btn btn-outline-secondary rounded-3 px-3">
                Cancelar
            </a>

        </div>

    </form>

</div>

@endsection