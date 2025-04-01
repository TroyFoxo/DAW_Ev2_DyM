@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard</h2>
    <ul>
        <li><a href="{{ route('users.index') }}">Usuarios</a></li>
        <li><a href="{{ route('orders.index') }}">Órdenes</a></li>
        <li><a href="{{ route('orders.archived') }}">Órdenes Archivadas</a></li>
    </ul>
</div>
@endsection
