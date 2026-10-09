@extends('layouts.app')

@section('content')
<br>

<div class="container">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
                Listado de Centros de Formación
            </h1>
            <a href="{{ route('training-center.create') }}" class="btn text-white fw-semibold px-3 py-2 shadow-sm" style="background-color: #16780c;">
                <i class="bi bi-plus-lg me-1"></i> Nuevo Centro de Formación </a>
        </div>

        <table id="idTraining_center" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th colspan="3">Acción</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($training_centers as $training_center)
                <tr>
                    <td>{{ $training_center->id }}</td>
                    <td>{{ $training_center->name }}</td>
                    <td>{{ $training_center->location }}</td>

                    <td>
                        <a href="{{ route('training-center.show', $training_center->id) }}">Mostrar</a>
                    </td>

                    <td>
                        <a href="{{ route('training-center.edit', $training_center->id) }}">Editar</a>
                    </td>

                    <td>
                        <form action="{{ route('training-center.destroy', $training_center->id) }}" method="POST" style="display:inline;">
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