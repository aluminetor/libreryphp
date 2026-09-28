@extends('layouts.app')
@section('content')
<h1>Autores!</h1>

<a href="{{ route('authors.create') }}" class="btn btn-primary">+ Nuevo autor</a>
<table class="table table-bordered mt-3">

    <thead>
        <th>nombres</th>
        <th>apellidos</th>
        <th></th>
    </thead>

    <tbody>
        @foreach ($authors as $author)
        <tr>
            <td>{{ $author->first_name }}</td>
            <td>{{ $author->last_name }}</td>
            <td>
                <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning" >Editar</a>
                <a href="" class="btn btn-danger" >Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection

