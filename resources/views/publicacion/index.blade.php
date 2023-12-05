<!-- crear la tabla para mostrar las publicaciones -->
<!-- resources/views/publicacion/index.blade.php -->
@extends('layouts.app')
@section('content')
<div class="container">
    <!-- boton para generar pdf -->
    <div class="row">
        <div class="col-md-12 mt-5">
            <a href="{{route('publicacion.pdf')}}" class="btn btn-primary">Generar PDF</a>
        </div>
    <div class="row">
        <div class="col-md-12 mt-5">
            <h3>Listado de publicaciones</h3>
            <table id="tabla" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Titulo</th>
                        <th>Publicacion</th>
                        <th>Fecha</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publicaciones as $publicacion)
                    <tr>
                        <td>{{$publicacion->id}}</td>
                        <td>{{$publicacion->usuario->nombre}}</td>
                        <td>{{$publicacion->titulo}}</td>
                        <td>{{$publicacion->publicacion}}</td>
                        <td>{{$publicacion->fecha}}</td>
                        <td><a href="{{route('publicacion.borrar', $publicacion->id)}}" class="btn btn-danger">Borrar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>  

<script>

    $(document).ready(function() {
        $('#tabla').DataTable();
    } );
    
</script>
@endsection


