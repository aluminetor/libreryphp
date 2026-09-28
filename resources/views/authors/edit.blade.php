@extends('layouts.app')
@section('content')

    <h1>Editar Autor</h1>
    <form action="{{ route('authors.update') }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" value="{{ $author->id }}" name="id" />

        <div class="form-floating mb-3">
            <input type="text"
                    class="form-control"
                    id="nameInput"
                    placeholder="Ingrese los nombres..."
                    name="first_name"
                    value="{{ $author->first_name }}"/>

            <label for="nameInput">Nombres</label>
        </div>

        <div class="form-floating">
            <input type="text"
            class="form-control"
            id="lastNameInput"
            placeholder="Ingrese los apellidos..."
            name="last_name"
            value="{{ $author->last_name }}"/>

            <label for="lastNameInput">Apellido</label>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Guardar</button>

    </form>

@endsection

