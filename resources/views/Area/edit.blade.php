@extends('layouts.app')

@section('content')
    
    <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
       Actualizar Area
    </h1>
    <br>

    <form action="{{ route('area.update', $area) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $area->name)}}">
        </label>
        <br><br>
        
        <button type="submit">Actualizar Area</button>
        <br>
        <br>
        <a href="{{ route('area.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-box-arrow-left"></i></i> Volver </a>
            

    </form>
@endsection