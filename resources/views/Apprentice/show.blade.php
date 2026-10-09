@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <div class="card shadow-lg border-0">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">
                    {{ $apprentice['name'] }}
                </h3>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">ID</label>
                        <div class="form-control">
                            {{ $apprentice['id'] }}
                        </div>
                    </div>

                    {{-- Muestra el Nombre del Curso en lugar del ID --}}
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Curso</label>
                        <div class="form-control">
                            {{ $apprentice->course->course_number ?? $apprentice['course']['course_number'] ?? 'Sin curso' }}
                        </div>
                    </div>

                    {{-- Muestra el Nombre del Computador en lugar del ID --}}
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Computador</label>
                        <div class="form-control">
                            {{ $apprentice->computer->number  ?? $apprentice['computer']['number'] ?? 'Sin computador' }}
                        </div>
                    </div>

                    
                    

                </div>

                <div class="mb-3">
                    <label class="fw-bold">Numero de identificacion</label>
                    <div class="form-control">
                        {{ $apprentice['Identity_card'] }}
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="fw-bold">Nombre</label>
                    <div class="form-control">
                        {{ $apprentice['name'] }}
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Email</label>
                    <div class="form-control">
                        {{ $apprentice['email'] }}
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Numero de Celular</label>
                    <div class="form-control">
                        {{ $apprentice['cell_number'] }}
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-md-6">
                        <label class="fw-bold">Fecha de creación</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($apprentice['created_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Última actualización</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($apprentice['updated_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <br>
            <a href="{{ route('apprentice.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-box-arrow-left"></i></i> Volver </a>

        </div>
        <br>


    </div>
@endsection