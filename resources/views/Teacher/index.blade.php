@extends('layouts.app')

@section('content')
<br>

<div class="container">

    <div class="container">
        <!-- CABECERA DE LA PÁGINA: Título a la izquierda + Botón a la derecha -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
                Listado de Instructores
            </h1>
            <a href="{{ route('teacher.create') }}" class="btn text-white fw-semibold px-3 py-2 shadow-sm" style="background-color: #16780c;">
                <i class="bi bi-plus-lg me-1"></i> Nuevo Instructor
            </a>
        </div>

        <table id="idTeacher" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Area</th>
                    <th>Training Center</th>
                    <th colspan="3">Acción</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($teachers as $teacher)

                <tr>

                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ optional($teacher->area)->name }}</td>
                    <td>{{ optional($teacher->trainingCenter)->name }}</td>

                    <td>
                        <a href="{{ route('teacher.show', $teacher->id) }}">Mostrar</a>
                    </td>

                    <td>
                        <a href="{{ route('teacher.edit', $teacher->id) }}">Editar</a>
                    </td>

                    <td>
                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Aprendiz">
                                <i class="bi bi-trash"></i> Borrar
                            </button>
                        </form>
                    </td>

                </tr>

                @endforeach

            </tbody>
        </table>
        <br>
    </div>

    @endsection