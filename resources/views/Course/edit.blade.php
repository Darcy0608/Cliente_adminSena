@extends('layouts.app')

@section('content')
    
    <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
       Actualizar Curso
    </h1>
    <br>

    <form action="{{ route('course.update', $course) }}" method="POST">

        @csrf
        @method('put')


        <label>
            Numero de Curso:
            <br>
            <input type="number" name="course_number" value="{{ old('course_number', $course->course_number) }}">
        </label>
        <br>

        <label>
            Día:
            <br>
            <input type="date" name="day" value="{{ old('day', $course->day) }}">
        </label>
        <br>

        <label>
            Área:
            <br>
            <input type="number" name="area_id" value="{{ old('area_id', $course->area_id) }}">
        </label>
        <br>

        <label>
            Centro de Formación:
            <br>
            <input type="number" name="training_center_id" value="{{ old('training_center_id', $course->training_center_id) }}">
        </label>

        <br><br>

        <button type="submit">Actualizar Curso</button>
        <br><br>

        <a href="{{ route('course.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-box-arrow-left"></i></i> Volver </a>
        </a>

    </form>
@endsection