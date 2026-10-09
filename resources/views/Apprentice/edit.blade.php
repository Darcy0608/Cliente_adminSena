@extends('layouts.app')

@section('content')

    <h1 class="fw-bold text-success m-0" style="color: #16780c !important;">
       Actualizar Aprendiz
    </h1>
    <br>

    <form action="{{ route('apprentice.update', $apprentice) }}" method="POST">

        @csrf
        @method('put')

         <label>
            Numero de identificacion:
            <br>
            <input type="text" name="Identity_card" value="{{ old('Identity_card', $apprentice->Identity_card)}}">
        </label>
        <br>

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $apprentice->name)}}">
        </label>
        <br>

        <label>
            Email:
            <br>
            <input type="text" name="email"  value="{{ old('email', $apprentice->email)}}">
        </label>
        <br>

        <label>
            Numero de Celular:
            <br>
            <input type="number" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number)}}">
        </label>
        <br><br>
        
        <button type="submit">Actualizar Aprendiz</button>
        <br><br>

        <a href="{{ route('apprentice.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-box-arrow-left"></i></i> Volver </a>
            

    </form>
@endsection