@extends('layouts.app')
@section('content')

    <h1>Nuevo Autor</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nameInput" placeholder="Ingrese los nombres..." name="first_name" />
            <label for="nameInput">Nombres</label>
        </div>
            <div class="form-floating">
            <input type="text" class="form-control" id="lastNameInput" placeholder="Ingrese los apellidos..." name="last_name" />
            <label for="lastNameInput">Apellido</label>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Guardar</button>

    </form>

@endsection

