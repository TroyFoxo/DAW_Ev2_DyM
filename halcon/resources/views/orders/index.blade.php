@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Órdenes</h2>
    <table border="1">
        <tr>
            <th>Factura</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->invoice_number }}</td>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->status }}</td>
            <td>
                <a href="{{ route('orders.edit', $order->id) }}">Editar</a> |
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Archivar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
