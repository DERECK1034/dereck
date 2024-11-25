@extends('principal')
@section('contenido')

<center><h1>Reporte de Canciones</h1></center>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            <th style="border: 1px solid black;">Clave</th>
            <th style="border: 1px solid black;">Nombre</th>
            <th style="border: 1px solid black;">Costo</th>
            <th style="border: 1px solid black;">Almacen</th>
            <th style="border: 1px solid black;">Color</th>
            <th style="border: 1px solid black;">Region</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $p)
        <tr>
            <td style="border: 1px solid black; text-align: center;">{{ $p->idp }}</td>
            <td style="border: 1px solid black; text-align: center;">{{ $p->nombre }}</td>
            <td style="border: 1px solid black; text-align: center;">{{ $p->costo }}</td>
            <td style="border: 1px solid black; text-align: center;">{{ $p->almacen }}</td>
            <td style="border: 1px solid black; text-align: center;">{{ $p->color }}</td>
            <td style="border: 1px solid black; text-align: center;">{{ $p->region }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop