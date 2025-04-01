@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Consultar Estado de Pedido</h2>
    
    <!-- Formulario de búsqueda -->
    <form action="{{ route('orders.search') }}" method="GET">
        @csrf
        <label for="invoice_number">Número de Factura:</label>
        <input type="text" name="invoice_number" id="invoice_number" required>
        <button type="submit">Buscar</button>
    </form>

    <!-- Mostrar resultado si existe una orden -->
    @if(isset($order))
        <div class="order-status">
            <h3>Estado del Pedido</h3>
            <p><strong>Factura:</strong> {{ $order->invoice_number }}</p>
            <p><strong>Cliente:</strong> {{ $order->customer_name }}</p>
            <p><strong>Estado:</strong> {{ $order->status }}</p>
            
            <!-- Mostrar foto de entrega si el estado es "Delivered" -->
            @if($order->status == 'Delivered' && $order->photo)
                <h4>Foto de Entrega</h4>
                <img src="{{ asset('storage/' . $order->photo) }}" alt="Evidencia de entrega" width="300">
            @endif
        </div>
    @endif

</div>
@endsection
