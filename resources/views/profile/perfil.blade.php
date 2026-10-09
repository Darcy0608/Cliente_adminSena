@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Portal del Aprendiz - SENA</h4>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <strong>¡Hola, {{ Auth::user()->name }}!</strong> Este es tu espacio personal en el sistema.
                    </div>

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Correo institucional:</strong> {{ Auth::user()->email }}</li>
                        <li class="list-group-item"><strong>Rol asignado:</strong> Aprendiz</li>
                        <li class="list-group-item"><strong>Estado de cuenta:</strong> <span class="badge bg-success">Activo</span></li>
                    </ul>

                    <div class="card bg-light p-3 border-0">
                        <h6>Equipos o Recursos Asignados</h6>
                        <p class="text-muted small mb-0">No tienes ningún computador o equipo registrado a tu cargo en este momento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection