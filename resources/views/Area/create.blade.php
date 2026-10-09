@extends('layouts.app')

@section('content')

<h1 class="fw-bold text-success mb-4" style="color: #16780c !important;">
    Formulario Registrar Área
</h1>

<!-- Contenedor principal con diseño de tarjeta -->
<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <!-- Nombre Área -->
        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Nombre:</label>
            <input type="text"
                class="form-control"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Ej: Tecnologías de la Información, Agroindustria..."
                required>
        </div>

        <div class="d-flex gap-2 mt-4">
            <button type="submit" class="btn btn-success fw-semibold px-4 rounded-3">
                Enviar Formulario
            </button>

            <a href="{{ route('area.index') }}" class="btn btn-outline-secondary rounded-3 px-3">
                Cancelar
            </a>
        </div>

    </form>
</div>

@endsection