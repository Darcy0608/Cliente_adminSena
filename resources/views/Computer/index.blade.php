@extends('layouts.app')

@section('content')
<br>

<div class="container">
    <!-- CABECERA DE LA PÁGINA: Título a la izquierda + Botón a la derecha -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
            Listado de Computadores
        </h1>
        <a href="{{ route('computer.create') }}" class="btn text-white fw-semibold px-3 py-2 shadow-sm" style="background-color: #16780c;">
            <i class="bi bi-plus-lg me-1"></i> Nuevo Computador
        </a>
    </div>

    <table id="idComputador" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Number</th>
                <th>Brand</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>

        <tbody>



            @foreach ($computers as $computer)
            <tr>
                <td>{{ $computer->id }}</td>
                <td>{{ $computer->number }}</td>
                <td>{{ $computer->brand }}</td>

                <td>
                    <a href="{{ route('computer.show', $computer->id) }}">Mostrar</a>
                </td>

                <td>
                    <a href="{{ route('computer.edit', $computer->id) }}">Editar</a>
                </td>

                <td>
                    <form action="{{ route('computer.destroy', $computer->id) }}" method="POST" style="display:inline;">
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

</div>
@endsection