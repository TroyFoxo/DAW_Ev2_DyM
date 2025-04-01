@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Órdenes Archivadas</h2>
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
                <form action="{{ route('orders.restore', $order->id) }}" method="POST">
                    @csrf
                    <button type="submit">Restaurar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
