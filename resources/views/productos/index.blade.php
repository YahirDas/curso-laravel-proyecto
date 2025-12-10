@extends('layouts.app') 

@section('content')
<div style="padding: 20px;">
    <h2>Lista de Productos</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>${{ $producto->precio }}</td>
                <td>{{ $producto->stock }}</td> </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection