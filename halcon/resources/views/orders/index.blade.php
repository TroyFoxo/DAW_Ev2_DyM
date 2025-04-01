@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Usuarios</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role->name }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
