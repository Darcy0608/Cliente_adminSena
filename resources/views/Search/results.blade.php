@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Resultados para: <span class="text-primary">"{{ $query }}"</span></h2>

    @if($apprentices->isEmpty() && $courses->isEmpty() && $computers->isEmpty() && $teachers->isEmpty() && $areas->isEmpty() && $trainingCenters->isEmpty())
        <div class="alert alert-warning role="alert"">
            No se encontraron coincidencias en ninguna sección del sistema.
        </div>
    @else

        {{-- Aprendices --}}
        @if($apprentices->isNotEmpty())
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white font-weight-bold">
                    👤 Aprendices ({{ $apprentices->count() }})
                </div>
                <div class="list-group list-group-flush">
                    @foreach($apprentices as $apprentice)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">{{ $apprentice->name }}</h5>
                                <p class="mb-1 text-muted small">
                                    <strong>Documento:</strong> {{ $apprentice->Identity_card }} | 
                                    <strong>Curso:</strong> {{ $apprentice->course->course_number ?? 'Sin curso' }} | 
                                    <strong>Equipo:</strong> {{ $apprentice->computer->brand ?? 'Sin computador' }}
                                </p>
                            </div>
                            <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-outline-primary btn-sm">Ver Detalle</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Cursos --}}
        @if($courses->isNotEmpty())
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-success text-white">
                    📋 Cursos / Fichas ({{ $courses->count() }})
                </div>
                <div class="list-group list-group-flush">
                    @foreach($courses as $course)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">Ficha: {{ $course->course_number }}</h5>
                                <p class="mb-0 text-muted small">{{ $course->name ?? '' }}</p>
                            </div>
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-outline-success btn-sm">Ver Detalle</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Computadores --}}
        @if($computers->isNotEmpty())
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-dark text-white">
                    💻 Equipos / PCs ({{ $computers->count() }})
                </div>
                <div class="list-group list-group-flush">
                    @foreach($computers as $computer)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">Equipo Nº: {{ $computer->number }}</h5>
                                <p class="mb-0 text-muted small">Marca: {{ $computer->brand ?? 'N/A' }}</p>
                            </div>
                            <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-outline-dark btn-sm">Ver Detalle</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Instructores --}}
        @if($teachers->isNotEmpty())
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-info text-white">
                    👨‍🏫 Instructores ({{ $teachers->count() }})
                </div>
                <div class="list-group list-group-flush">
                    @foreach($teachers as $teacher)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">{{ $teacher->name }}</h5>
                                <p class="mb-0 text-muted small">Correo: {{ $teacher->email }}</p>
                            </div>
                            <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-outline-info btn-sm">Ver Detalle</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Áreas y Centros --}}
        @if($areas->isNotEmpty())
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-secondary text-white">🏫 Áreas</div>
                <div class="list-group list-group-flush">
                    @foreach($areas as $area)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $area->name }}</span>
                            <a href="{{ route('area.show', $area->id) }}" class="btn btn-outline-secondary btn-sm">Ver Detalle</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    @endif

    <div class="mt-3">
        <a href="{{ route('home') }}" class="btn btn-secondary">Volver al Inicio</a>
    </div>
</div>
@endsection