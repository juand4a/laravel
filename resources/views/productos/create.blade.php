@extends('layouts.app')

@section('content')
<div class="container"> <h1>Crear Producto</h1>

    <form method="POST" action="{{ route('productos.store') }}">
        @csrf
        <label for="nombre">Nombre del Producto</label>
        <input type="text" name="nombre" placeholder="Ej. Laptop Dell" required>

        <label for="precio">Precio (USD)</label>
        <input type="number" name="precio" step="0.01" placeholder="0.00" required>

        <label for="cantidad">Cantidad en Stock</label>
        <input type="number" name="cantidad" placeholder="10" required>

        <br> <button type="submit">Guardar Producto</button>
    </form>
    
    <p style="margin-top: 20px;">
        <a href="{{ route('productos.index') }}" style="background: #95a5a6;">Volver al listado</a>
    </p>
</div>
@endsection