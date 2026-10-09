@extends('layouts.app')

@section('content')

<br>

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
            Listado de Ambientes
        </h1>

        <a href="{{ route('training_environment.create') }}"
            class="btn text-white fw-semibold px-3 py-2 shadow-sm"
            style="background-color: #16780c;">

            <i class="bi bi-plus-lg me-1"></i>Nuevo Ambiente
        </a>
    </div>


    <table id="idTraining_environment"
        class="table table-striped table-bordered"
        style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Tipo</th>
                <th>Capacidad</th>
                <th>Ubicación</th>
                <th>Estado</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($training_environments as $training_environment)
            <tr>
                <!-- Id -->
                <td>
                    {{ $training_environment->id }}
                </td>

                <!-- Foto del Ambiente -->
                <td>
                    @if ($training_environment->urlFoto)

                        <img src="{{ asset('storage/images/' . $training_environment->urlFoto) }}"
                            alt="Foto Ambiente de Formación"
                            width="60"
                            class="img-thumbnail">
                    @else
                        <span class="badge bg-secondary"> Sin foto </span>
                    @endif
                </td>

                <td>{{ $training_environment->name }}</td>
                <td>{{ $training_environment->code }} </td>
                <td>{{ $training_environment->type }}</td>
                <td>{{ $training_environment->capacity }}</td>
                <td>{{ $training_environment->location }}</td>
                <td> {{ $training_environment->status }} </td>

                <td>
                    <a href="{{ route('training_environment.show', $training_environment->id) }}"> Mostrar </a>
                </td>

                <td>
                    <a href="{{ route('training_environment.edit', $training_environment->id) }}"> Editar </a>
                </td>

                <td>
                    <form action="{{ route('training_environment.destroy', $training_environment->id) }}"
                        method="POST"
                        style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Ambiente"><i class="bi bi-trash"></i> Borrar </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
</div>

@endsection