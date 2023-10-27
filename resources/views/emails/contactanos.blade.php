<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuerpo del mensaje</title>

    <style>
        h1{
            color: blue;
        }
    </style>
</head>
<body>

    <h1>Correo Electrónico</h1>
    <p>Este es el primer correo que envío por Laravel</p>

    <p><strong>Nombre: </strong>{{$data['nombre']}}</p>
    <p><strong>Apellido: </strong>{{$data['apellido']}}</p>
    <p><strong>Email: </strong>{{$data['email']}}</p>
    <p><strong>Teléfono: </strong>{{$data['telefono']}}</p>
    <p><strong>Comentarios: </strong>{{$data['comentarios']}}</p>

    
</body>
</html>