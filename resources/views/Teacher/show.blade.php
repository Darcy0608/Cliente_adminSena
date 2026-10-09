@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">
                {{ $teacher->name ?? $teacher['name'] }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control">
                        {{ $teacher->id ?? $teacher['id'] }}
                    </div>
                </div>

                {{-- Muestra el Nombre del Área en lugar del ID --}}
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Área</label>
                    <div class="form-control">
                        {{ $teacher->area->name ?? $teacher['area']['name'] ?? 'Sin área' }}
                    </div>
                </div>

                {{-- Muestra el Nombre del Centro de Formación en lugar del ID --}}
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Centro de Formación</label>
                    <div class="form-control">
                        {{ $teacher->trainingCenter->name ?? $teacher->training_center->name ?? $teacher['training_center']['name'] ?? 'Sin centro' }}
                    </div>
                </div>

            </div>

            <div class="mb-3">
                <label class="fw-bold">Nombre</label>
                <div class="form-control">
                    {{ $teacher->name ?? $teacher['name'] }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Email</label>
                <div class="form-control">
                    {{ $teacher->email ?? $teacher['email'] }}
                </div>
            </div>

            <hr>

            <div class="row">

                <div class="col-md-6">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($teacher->created_at ?? $teacher['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($teacher->updated_at ?? $teacher['updated_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">

        <a href="{{ route('teacher.index') }}" class="btn btn-success">
            <i class="bi bi-box-arrow-left"></i></i> Volver </a>
        </a>

    </div>

    <br>

</div>

@endsection