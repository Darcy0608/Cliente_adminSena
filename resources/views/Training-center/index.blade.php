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
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Imagen</th>
                    <th colspan="3">Acción</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($training_centers as $training_center)
                <tr>
                    <td>{{ $training_center['id'] }}</td>
                    <td>{{ $training_center['name'] }}</td>
                    <td>{{ $training_center['location'] }}</td>

                    <td>
                        <img src="{{ $training_center['imagen_url'] }}" alt="{{ $training_center['name'] }}" width="100">
                    </td>

                   <!-- Boton Mostrar -->
                    <td>
                        <a href="{{ route('training-center.show', $training_center['id']) }}" class="btn btn-sm text-white" style="background-color: #3264ab;" title="Mostrar">Mostrar</a>
                    </td>

                    <!-- Botón Editar -->
                    <td>
                        <a href="{{ route('training-center.edit', $training_center['id']) }}" class="btn btn-warning btn-sm text-white"> Editar </a>
                    </td>

                    <!-- Botón Eliminar -->
                    <td>
                        <form action="{{ route('training-center.destroy', $training_center['id']) }}" method="POST">
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