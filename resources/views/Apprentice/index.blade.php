@extends('layouts.app')

@section('content')
<br>

<div class="container">

    <!-- CABECERA DE LA PÁGINA: Título a la izquierda + Botón a la derecha -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
            Listado de Aprendices
        </h1>
        <a href="{{ route('apprentice.create') }}" class="btn text-white fw-semibold px-3 py-2 shadow-sm" style="background-color: #16780c;">
            <i class="bi bi-plus-lg me-1"></i> Nuevo Aprendiz
        </a>
    </div>

    <table id="idApprentice" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de Identificación</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Numero de celular</th>
                <th>Id_curso</th>
                <th>Id_computador</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice->id }}</td>
                <td>{{ $apprentice->Identity_card}}</td>
                <td>{{ $apprentice->name }}</td>
                <td>{{ $apprentice->email }}</td>
                <td>{{ $apprentice->cell_number }}</td>

                <td>{{ $apprentice->course->course_number ?? 'Sin curso' }}</td>
                <td>{{ $apprentice->computer->brand ?? 'Sin computador'}}</td>

                <!-- Boton Mostrar -->
                <td>
                    <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-info btn-sm text-white" title="Mostrar">
                        <i class="bi bi-eye"></i>
                    </a>
                </td>
                <!-- Boton Editar -->
                <td>
                    <a href="{{ route('apprentice.edit', $apprentice->id) }}" class="btn btn-warning btn-sm text-white" title="Editar">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </td>
                <!-- Boton Borrar y Modal -->
                <td>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $apprentice->id }}" title="Eliminar">
                        <i class="bi bi-trash"></i>
                    </button>

                    <!-- Modal de Confirmación individual por registro -->
                    <div class="modal fade" id="modalEliminar{{ $apprentice->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 shadow rounded-4 overflow-hidden">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title fw-bold">
                                        <i class="bi bi-exclamation-triangle-fill me-2"></i>Confirmar Eliminación
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center p-4">
                                    <p class="fs-5 mb-1 text-dark">¿Seguro que quieres eliminar este registro?</p>
                                    <p class="text-muted small"><strong>{{ $apprentice->name }}</strong> ({{ $apprentice->Identity_card }})</p>
                                </div>
                                <div class="modal-footer bg-light border-0">
                                    <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Aprendiz">
                                            <i class="bi bi-trash"></i> Borrar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection