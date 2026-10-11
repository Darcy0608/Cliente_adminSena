@extends('layouts.app')

@section('content')

<br>

<div class="container">

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
                Listado de Cursos
            </h1>
            <a href="{{ route('course.create') }}" class="btn text-white fw-semibold px-3 py-2 shadow-sm" style="background-color: #16780c;">
                <i class="bi bi-plus-lg me-1"></i> Nuevo Curso
            </a>
        </div>

        <table id="idCourse" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero del curso</th>
                    <th>Día</th>
                    <th>Area</th>
                    <th>Centro de Formación</th>
                    <th colspan="3">Acción</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($courses as $course)

                <tr>

                    <td>{{ $course['id'] }}</td>
                    <td>{{ $course['course_number'] }}</td>
                    <td>{{ $course['day'] }}</td>
                    <td>{{ optional($course['area'])['name'] }}</td>
                    <td>{{ optional($course['training_center'])['name'] ?? 'Sin centro de formación' }}</td>

                    <!-- Botón Mostrar -->
                    <td>
                        <a href="{{ route('course.show', $course['id']) }}" class="btn btn-info btn-sm text-white"> Mostrar </a>
                    </td>

                    <!-- Botón Editar -->
                    <td>
                        <a href="{{ route('course.edit', $course['id']) }}" class="btn btn-warning btn-sm text-white"> Editar </a>
                    </td>

                    <!-- Botón Eliminar -->
                    <td>
                        <form action="{{ route('course.destroy', $course['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar">
                                <i class="bi bi-trash"></i>
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