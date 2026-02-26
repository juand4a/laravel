@extends('layouts.app')

@section('content')
<div class="container"> <h1>Lista de Productos</h1>
    <a href="{{ route('productos.create') }}"> + Crear Nuevo Producto</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>${{ number_format($producto->precio, 2) }}</td> <td>{{ $producto->cantidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection