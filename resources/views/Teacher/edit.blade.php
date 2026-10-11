@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1 class="fw-bold text-success mb-4" style="color: #16780c !important;">
        Actualizar Instructor
    </h1>

    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">

        <form action="{{ route('teacher.update', $teacher['id']) }}" method="POST">

            @csrf
            @method('PUT')

            {{-- Nombre --}}
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">
                    Nombre:
                </label>
                <input type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    value="{{ old('name', $teacher['name']) }}"
                    required>
            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">
                    Email:
                </label>
                <input type="email"
                    name="email"
                    id="email"
                    class="form-control"
                    value="{{ old('email', $teacher['email']) }}"
                    required>
            </div>

            {{-- Área --}}
            <div class="mb-3">
                <label for="area_id" class="form-label fw-semibold">
                    Área:
                </label>

                <select name="area_id" id="area_id" class="form-select" required>
                    <option value="">Seleccione un área</option>

                    @foreach ($areas as $area)
                        <option value="{{ $area['id'] }}"
                            {{ old('area_id', $teacher['area_id']) == $area['id'] ? 'selected' : '' }}>
                            {{ $area['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Centro de formación --}}
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
                            {{ old('training_center_id', $teacher['training_center_id']) == $training_center['id'] ? 'selected' : '' }}>
                            {{ $training_center['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex gap-2 mt-4">
                <button type="submit"
                    class="btn btn-success fw-semibold px-4 rounded-3"
                    style="background-color: #16780c;">
                    Actualizar Instructor
                </button>

                <a href="{{ route('teacher.index') }}"
                    class="btn btn-outline-secondary rounded-3 px-3">
                    Volver
                </a>
            </div>

        </form>

    </div>
</div>

@endsection