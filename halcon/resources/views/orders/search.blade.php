@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buscar Pedido</h2>
    <form action="{{ route('orders.search') }}" method="GET">
        <label for="invoice_number">Número de Factura:</label>
        <input type="text" name="invoice_number" required>
        <button type="submit">Buscar</button>
    </form>

    @if(isset($order))
        <h3>Estado del Pedido</h3>
        <p><strong>Estado:</strong> {{ $order->status }}</p>
        @if($order->status == 'Delivered')
            <img src="{{ asset('storage/' . $order->photo) }}" alt="Foto de entrega" width="300">
        @endif
    @endif
</div>
@endsection