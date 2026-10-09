@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Panel del Instructor - SENA</h4>
                </div>
                <div class="card-body">
                    <h5>Bienvenido, {{ Auth::user()->name }}</h5>
                    <p class="text-muted">Aquí podrás gestionar tus fichas asignadas, ver la lista de aprendices y el estado de los equipos.</p>
                    
                    <hr>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card p-3 bg-light border">
                                <h6>Mis Fichas / Cursos</h6>
                                <p class="small text-muted">Consulta los cursos que impartes actualmente.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">Ver fichas</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card p-3 bg-light border">
                                <h6>Listado de Aprendices</h6>
                                <p class="small text-muted">Revisa asistencia y reportes de tus aprendices.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">Ver aprendices</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card p-3 bg-light border">
                                <h6>Equipos Asignados</h6>
                                <p class="small text-muted">Verifica los computadores en tu ambiente.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">Ver equipos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection