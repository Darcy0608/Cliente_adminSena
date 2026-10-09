@extends('layouts.app')

@section('content')
    <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
       Actualizar Profesor
    </h1>
    <br>

    <form action="{{ route('teacher.update', $teacher) }}" method="POST">

        @csrf
        @method('put')


        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $teacher->name) }}">
        </label>
        <br>

        <label>
            Email:
            <br>
            <input type="text" name="email" value="{{ old('email', $teacher->email) }}">
        </label>
        <br>

        <label>
            Área:
            <br>
            <input type="number" name="area_id" value="{{ old('area_id', $teacher->area_id) }}">
        </label>
        <br>

        <label>
            Centro de Formación:
            <br>
            <input type="number" name="training_center_id" value="{{ old('training_center_id', $teacher->training_center_id) }}">
        </label>

        <br><br>

        <button type="submit">Actualizar Instructor</button>
        <br><br>

        <a href="{{ route('teacher.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-box-arrow-left"></i></i> Volver </a>
        </a>

    </form>
@endsection