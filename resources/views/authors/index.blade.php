@extends('layouts.app')
@section('content')
<h1>Authores!</h1>

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
                <a href="btn btn-warning" >Editar</a>
                <a href="btn btn-danger" >Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection

