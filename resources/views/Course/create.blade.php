@extends('layouts.app')

@section('content')

<h1 class="fw-bold text-success mb-4" style="color: #16780c !important;">
    Formulario Registrar Cursos
</h1>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <!-- Numero de Curso -->
        <div class="mb-3">
            <label for="course_number" class="form-label fw-semibold">Número de curso:</label>
            <input type="number"
                class="form-control"
                id="course_number"
                name="course_number"
                value="{{ old('course_number') }}"
                placeholder="Ej: 2670123"
                required>
        </div>

        <!-- Fecha del Curso -->
        <div class="mb-3">
            <label for="day" class="form-label fw-semibold">Día:</label>
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

        <!-- Selección Centro de Formación -->
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

            <a href="{{ route('course.index') }}" class="btn btn-outline-secondary rounded-3 px-3">
                Cancelar
            </a>
        </div>

    </form>
</div>

@endsection