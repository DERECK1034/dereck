@extends('principal')
@section('contenido')

<html>
    <body>
        <head>
         <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.2.3/dist/quartz/bootstrap.min.css" rel="stylesheet">
        </head>
            <center>
                <h1>Registro</h1>
                <br>
                <form action="{{route('guardaprod')}}" method = "POST">
                    {{csrf_field()}}
                    <table border = 2>
                        <tr>
                            <td width = 100>Clave:</td>
                            <td width = 400>
                                @if($errors->first('idp'))
                                <p class = "text-warning">{{$errors->first('idp')}}</p>
                                @endif
                                <input type="text" calss="form-control" name='idp' value = {{$sigue}} readonly = 'readonly'>
                            </td>
                        </tr>
                        <tr>
                            <td width = 100>Nombre:</td>
                            <td width = 400>
                                @if($errors->first('nombre'))
                                <p class = "text-warning">{{$errors->first('nombre')}}</p>
                                @endif
                                <input type="text" calss="form-control" name='nombre' placeholder = 'Ejemplo: IT-05'>
                            </td>
                        </tr>
                        <tr>
                            <td width = 100>Costo:</td>
                            <td width = 400>
                                @if($errors->first('costo'))
                                <p class = "text-warning">{{$errors->first('costo')}}</p>
                                @endif
                                <input type="text" calss="form-control" name='costo' placeholder = 'Ejemplo: 123.00'>
                            </td>
                        </tr>
                        <tr>
                            <td width = 100>Almacen:</td>
                            <td width = 400>
                                @if($errors->first('almacen'))
                                <p class = "text-warning">{{$errors->first('almacen')}}</p>
                                @endif
                                <input type="text" calss="form-control" name='almacen' placeholder = 'Ejemplo: A018945'>
                            </td>
                        </tr>
                        <tr>
                            <td>Seleccione Colores</td>
                            <td>
                                <select name="idco">
                                    @foreach($colores as $col)
                                    <option value="{{$col -> idco}}">{{$col -> nombre}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Region</td>
                            <td>
                                @if($errors->first('region'))
                                <p class = "text-warning">{{$errors->first('region')}}</p>
                                @endif
                                <input type="radio" lass="form-check-input" name = 'region' value = 'A' checked>A
                                <input type="radio" lass="form-check-input" name = 'region' value = 'B'>B
                            </td>
                        </tr>
                        <tr>
                            <td colspan = 2>
                                <input type="submit" class="btn btn-info" value = 'Guardar'>
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
    </body>
</html>

@stop