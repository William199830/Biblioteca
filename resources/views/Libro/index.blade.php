<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <table class="table-primary">
            <thead>
            <th>
                Titulo
            </th>
            <th>
                Año
            </th>
            <th>
                Genero
            </th>
            <th>
                Número de paginas
            </th>
            </thead>
            <tbody>
            @foreach ($libros as $libro)
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->ano}}</td>
            <td>{{$libro->genero}}</td>
            <td>{{$libro->num_pag}}</td>
            @endforeach
            </tbody>
        </table>
    </body>
</html>
