
<!-- vista para generar el pdf -->
<!-- resources/views/publicacion/pdf.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Publicaciones</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Listado de publicaciones</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Titulo</th>
                <th>Publicacion</th>
                <th>Fecha</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
