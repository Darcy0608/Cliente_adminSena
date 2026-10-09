@extends('layouts.app')

@section('content')

<h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
    Actualizar Ambiente
</h1>
<br>

<form action="{{ route('training_environment.update', $training_environment) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('put')

    <!-- Nombre -->
    <label>
        Nombre:
        <br>
        <input type="text"
            name="name"
            value="{{ old('name', $training_environment->name) }}">
    </label>
    <br>

    <!-- Código -->
    <label>
        Código:
        <br>
        <input type="text"
            name="code"
            value="{{ old('code', $training_environment->code) }}">
    </label>
    <br>

    <!-- Tipo -->
    <label>
        Tipo de ambiente:
        <br>
        <select name="type">
            <option value="Aula" {{ old('type', $training_environment->type) == 'Aula' ? 'selected' : '' }}>Aula</option>
            <option value="Laboratorio" {{ old('type', $training_environment->type) == 'Laboratorio' ? 'selected' : '' }}>Laboratorio</option>
            <option value="Taller" {{ old('type', $training_environment->type) == 'Taller' ? 'selected' : '' }}>Taller</option>
            <option value="Sala de informática" {{ old('type', $training_environment->type) == 'Sala de informática' ? 'selected' : '' }}> Sala de informática </option>
            <option value="Auditorio" {{ old('type', $training_environment->type) == 'Auditorio' ? 'selected' : '' }}> Auditorio </option>
        </select>
    </label>
    <br>

    <!-- Capacidad -->
    <label>
        Capacidad:
        <br>
        <input type="number"
            name="capacity"
            value="{{ old('capacity', $training_environment->capacity) }}"
            min="1">
    </label>
    <br>

    <!-- Ubicación -->
    <label>
        Ubicación:
        <br>
        <input type="text"
            name="location"
            value="{{ old('location', $training_environment->location) }}">
    </label>
    <br>

    <!-- Estado -->
    <label>
        Estado:
        <br>
        <select name="status">

            <option value="Disponible" {{ old('status', $training_environment->status) == 'Disponible' ? 'selected' : '' }}>Disponible</option>
            <option value="Ocupado" {{ old('status', $training_environment->status) == 'Ocupado' ? 'selected' : '' }}>Ocupado</option>
            <option value="Mantenimiento" {{ old('status', $training_environment->status) == 'Mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
            <option value="Inactivo" {{ old('status', $training_environment->status) == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
        </select>
    </label>
    <br>

    <!-- Foto actual -->
    <label>
        Foto actual:
        <br>
        @if ($training_environment->urlFoto)

        <img src="{{ asset('storage/images/' . $training_environment->urlFoto) }}"
            alt="Foto Ambiente de Formación"
            width="200"
            class="img-thumbnail">

        @else
        <span class="badge bg-secondary"> Sin foto </span>
        @endif
    </label>

    <br><br>

    <label>
        Cambiar foto:
        <br>

        <input type="file"
            name="urlFoto"
            accept="image/*">
    </label>

    <br><br>

    <button type="submit">Actualizar Ambiente</button>

    <br>
    <br>

    <a href="{{ route('training_environment.index') }}" class="btn btn-success mb-3">
        <i class="bi bi-box-arrow-left"></i> Volver
    </a>

</form>

@endsection