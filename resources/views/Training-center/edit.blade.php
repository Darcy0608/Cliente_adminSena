@extends('layouts.app')

@section('content')

<h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
    Actualizar Centro de Formación
</h1>
<br>

<form action="{{ route('training-center.update', $training_center) }}" method="POST">

    @csrf
    @method('put')

    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{ old('name', $training_center->name) }}">
    </label>
    <br>

    <label>
        Ubicación:
        <br>
        <input type="text" name="location" value="{{ old('location', $training_center->location) }}">
    </label>
    <br><br>

    <button type="submit">Actualizar Centro de Formación</button>
    <br>
    <br>

    <a href="{{ route('training-center.index') }}" class="btn btn-success mb-3">
        <i class="bi bi-box-arrow-left"></i></i> Volver </a>
    </a>

</form>
@endsection