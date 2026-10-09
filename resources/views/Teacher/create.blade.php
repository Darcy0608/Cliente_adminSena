@extends('layouts.app')

@section('content')

<h1 class="fw-bold text-success mb-4" style="color: #16780c !important;">
    Formulario Registrar Profesores
</h1>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <!-- Nombre Instructor -->
        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Nombre instructor:</label>
            <input type="text"
                class="form-control"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Ej: Fabián Gómez"
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
                placeholder="ejemplo@sena.edu.co"
                required>
        </div>

        <!-- Fecha -->
        <div class="mb-3">
            <label for="day" class="form-label fw-semibold">Fecha:</label>
            <input type="date"
                class="form-control"
                id="day"
                name="day"
                value="{{ old('day') }}"
                required>
        </div>

        <!-- Selección Área -->
        <div class="mb-3">
            <label for="area_id" class="form-label fw-semibold">Área:</label>
            <select name="area_id" id="area_id" class="form-select" required>
                <option value="">Seleccione un área</option>
                @foreach($areas as $area)
                <option value="{{ $area->id }}" {{ old('area_id') == $area->id ? 'selected' : '' }}>
                    {{ $area->name }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Selección Centro de Formacion -->
        <div class="mb-3">
            <label for="training_center_id" class="form-label fw-semibold">Centro de Formación:</label>
            <select name="training_center_id" id="training_center_id" class="form-select" required>
                <option value="">Seleccione un centro de formación</option>
                @foreach($training_centers as $training_center)
                <option value="{{ $training_center->id }}" {{ old('training_center_id') == $training_center->id ? 'selected' : '' }}>
                    {{ $training_center->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex gap-2 mt-4">
            <button type="submit" class="btn btn-success fw-semibold px-4 rounded-3">
                Enviar Formulario
            </button>

            <a href="{{ route('teacher.index') }}" class="btn btn-outline-secondary rounded-3 px-3">
                Cancelar
            </a>
        </div>

    </form>
</div>

@endsection