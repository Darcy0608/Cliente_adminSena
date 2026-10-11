@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1 class="fw-bold text-success mb-4" style="color: #16780c !important;">
        Actualizar Curso
    </h1>

    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">

        <form action="{{ route('course.update', $course['id']) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="course_number" class="form-label fw-semibold">
                    Número de ficha:
                </label>

                <input type="text"
                    name="course_number"
                    id="course_number"
                    class="form-control"
                    value="{{ old('course_number', $course['course_number']) }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="day" class="form-label fw-semibold">
                    Jornada:
                </label>

                <input type="text"
                    name="day"
                    id="day"
                    class="form-control"
                    value="{{ old('day', $course['day']) }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="area_id" class="form-label fw-semibold">
                    Área:
                </label>

                <select name="area_id" id="area_id" class="form-select" required>
                    <option value="">Seleccione un área</option>

                    @foreach ($areas as $area)
                        <option value="{{ $area['id'] }}"
                            {{ old('area_id', $course['area_id']) == $area['id'] ? 'selected' : '' }}>
                            {{ $area['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="training_center_id" class="form-label fw-semibold">
                    Centro de formación:
                </label>

                <select name="training_center_id"
                    id="training_center_id"
                    class="form-select"
                    required>

                    <option value="">Seleccione un centro de formación</option>

                    @foreach ($training_centers as $training_center)
                        <option value="{{ $training_center['id'] }}"
                            {{ old('training_center_id', $course['training_center_id']) == $training_center['id'] ? 'selected' : '' }}>
                            {{ $training_center['name'] }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="d-flex gap-2 mt-4">

                <button type="submit"
                    class="btn btn-success fw-semibold px-4 rounded-3"
                    style="background-color: #16780c;">
                    Actualizar Curso
                </button>

                <a href="{{ route('course.index') }}"
                    class="btn btn-outline-secondary rounded-3 px-3">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>

@endsection