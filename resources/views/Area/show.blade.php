@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">{{ $area['name'] }}</h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control">
                        {{ $area['id'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Nombre</label>
                    <div class="form-control">
                        {{ $area['name'] }}
                    </div>
                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-md-6">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($area['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($area['updated_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">

        <a href="{{ route('area.index') }}" class="btn btn-success">
            <i class="bi bi-box-arrow-left"></i></i> Volver </a>
        

    </div>
    <br>

</div>
@endsection