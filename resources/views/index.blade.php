<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <h1>Todos los Mensajes de la base de datos</h1>
    <table>
        <tr>
            <th>Texto</th>
            <th>Imagen</th>
        </tr>
        @foreach ($datos as $fila)
        <tr>
            <td>{{$fila->id}}</td>
            <td>{{$fila->text}}</td>
            <td>{{$fila->imagen}}</td>
            <td>

                <!-- Formulario para eliminar -->
                <form action="/delete/{{$fila->id}}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Eliminar</button>
                </form>
            </td>
        </tr>           
        @endforeach
        
   
</body>
</html>

