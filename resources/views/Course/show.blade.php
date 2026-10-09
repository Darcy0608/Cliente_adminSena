@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <div class="card shadow-lg border-0">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">
                    {{ $course['course_number'] }}
                </h3>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">ID</label>
                        <div class="form-control">
                            {{ $course['id'] }}
                        </div>
                    </div>

                    {{-- Muestra el Nombre del Área en lugar del ID --}}
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Área</label>
                        <div class="form-control">
                            {{ $course->area->name ?? $course['area']['name'] ?? 'Sin área' }}
                        </div>
                    </div>

                    {{-- Muestra el Nombre del Centro de Formación en lugar del ID --}}
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Centro de Formación</label>
                        <div class="form-control">
                            {{ $course->Trainig_center->name ?? $course['Trainig_center']['name'] ?? 'Sin Centro de Formación' }}
                        </div>
                    </div>

                </div>

                <div class="mb-3">
                    <label class="fw-bold">Número del Curso</label>
                    <div class="form-control">
                        {{ $course['course_number'] }}
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Día</label>
                    <div class="form-control">
                        {{ $course['day'] }}
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-md-6">
                        <label class="fw-bold">Fecha de creación</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($course['created_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Última actualización</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($course['updated_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <br>
            <a href="{{ route('course.index') }}" class="btn btn-success mb-3">
                <i class="bi bi-box-arrow-left"></i></i> Volver </a>
            </a>

        </div>
        <br>

    </div>
@endsection