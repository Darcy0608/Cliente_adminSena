@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">

            <h3 class="mb-0">
                {{ $training_environment['name'] }}
            </h3>

        </div>


        <div class="card-body">

            <div class="row">

                <!-- ID -->
                <div class="col-md-6 mb-3">

                    <label class="fw-bold">
                        ID
                    </label>

                    <div class="form-control">
                        {{ $training_environment['id'] }}
                    </div>

                </div>


                <!-- Nombre -->
                <div class="col-md-6 mb-3">

                    <label class="fw-bold">
                        Nombre
                    </label>

                    <div class="form-control">
                        {{ $training_environment['name'] }}
                    </div>

                </div>


                <!-- Código -->
                <div class="col-md-6 mb-3">

                    <label class="fw-bold">
                        Código
                    </label>

                    <div class="form-control">
                        {{ $training_environment['code'] }}
                    </div>

                </div>


                <!-- Tipo -->
                <div class="col-md-6 mb-3">

                    <label class="fw-bold">
                        Tipo de ambiente
                    </label>

                    <div class="form-control">
                        {{ $training_environment['type'] }}
                    </div>

                </div>


                <!-- Capacidad -->
                <div class="col-md-6 mb-3">

                    <label class="fw-bold">
                        Capacidad
                    </label>

                    <div class="form-control">
                        {{ $training_environment['capacity'] }}
                    </div>

                </div>


                <!-- Ubicación -->
                <div class="col-md-6 mb-3">

                    <label class="fw-bold">
                        Ubicación
                    </label>

                    <div class="form-control">
                        {{ $training_environment['location'] }}
                    </div>

                </div>


                <!-- Estado -->
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">
                        Estado
                    </label>

                    <div class="form-control">
                        {{ $training_environment['status'] }}
                    </div>
                </div>

                <!-- Foto del Ambiente -->
                <div class="col-md-6 mb-3">

                    <label class="fw-bold"> Foto del Ambiente </label>
                    <div class="mt-2">
                        @if ($training_environment['urlFoto'])

                        <img src="{{ asset('storage/images/' . $training_environment['urlFoto']) }}"
                            alt="Foto Ambiente de Formación"
                            width="200"
                            class="img-thumbnail">
                        @else
                        <span class="badge bg-secondary"> Sin foto </span>
                        @endif
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <!-- Fecha de creación -->
                <div class="col-md-6">

                    <label class="fw-bold">
                        Fecha de creación
                    </label>

                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($training_environment['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <!-- Última actualización -->
                <div class="col-md-6">

                    <label class="fw-bold">
                        Última actualización
                    </label>

                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($training_environment['updated_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">

        <a href="{{ route('training_environment.index') }}"
            class="btn btn-success">
            <i class="bi bi-box-arrow-left"></i>
            Volver
        </a>
    </div>
    <br>
</div>
@endsection