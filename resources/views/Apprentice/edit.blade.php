@extends('layouts.app')

@section('content')

<h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
    Actualizar Aprendiz
</h1>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">

    <br>

    <form action="{{ route('apprentice.update', $apprentice ['id']) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Numero de identificacion:
            <br>
            <input type="text" name="Identity_card" value="{{ old('Identity_card', $apprentice['Identity_card'])}}">
        </label>
        <br>

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $apprentice['name'])}}">
        </label>
        <br>

        <label>
            Email:
            <br>
            <input type="text" name="email" value="{{ old('email', $apprentice['email'])}}">
        </label>
        <br>

        <label>
            Numero de Celular:
            <br>
            <input type="number" name="cell_number" value="{{ old('cell_number', $apprentice['cell_number'])}}">
        </label>
        <br>

        {{-- Seleccionar curso --}}
        <label for="course_id">Curso:</label>
        <br>
        <select name="course_id" id="course_id" required>
            <option value="">Seleccione un curso</option>

            @foreach ($courses as $course)
            <option value="{{ $course['id'] }}"
                {{ old('course_id', $apprentice['course_id']) == $course['id'] ? 'selected' : '' }}>
                {{ $course['course_number'] }}
            </option>
            @endforeach
        </select>
        <br><br>

        {{-- Seleccionar equipo --}}
        <label for="computer_id">Equipo:</label>
        <br>
        <select name="computer_id" id="computer_id" required>
            <option value="">Seleccione un equipo</option>

            @foreach ($computers as $computer)
            <option value="{{ $computer['id'] }}"
                {{ old('computer_id', $apprentice['computer_id']) == $computer['id'] ? 'selected' : '' }}>
                {{ $computer['number'] }}
            </option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Actualizar Aprendiz</button>
        <br><br>

        <a href="{{ route('apprentice.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-box-arrow-left"></i></i> Volver </a>

    </form>
</div>
@endsection