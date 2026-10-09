@extends('layouts.app')

@section('content')

<h1 class="fw-bold text-success mb-4" style="color: #16780c !important;">
    Formulario Registrar Computador
</h1>

<!-- Contenedor principal del formulario con diseño de tarjeta -->
<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <!-- Numero -->
        <div class="mb-3">
            <label for="number" class="form-label fw-semibold">Número:</label>
            <input type="text"
                class="form-control"
                id="number"
                name="number"
                value="{{ old('number') }}"
                placeholder="Ej: PC-01"
                required>
        </div>

        <!-- Marca -->
        <div class="mb-3">
            <label for="brand" class="form-label fw-semibold">Marca:</label>
            <input type="text"
                class="form-control"
                id="brand"
                name="brand"
                value="{{ old('brand') }}"
                placeholder="Ej: Lenovo, HP, Dell..."
                required>
        </div>

        <div class="d-flex gap-2 mt-4">
            <button type="submit" class="btn btn-success fw-semibold px-4 rounded-3">
                Enviar Formulario
            </button>

            <a href="{{ route('computer.index') }}" class="btn btn-outline-secondary rounded-3 px-3">
                Cancelar
            </a>
        </div>

    </form>
</div>

@endsection