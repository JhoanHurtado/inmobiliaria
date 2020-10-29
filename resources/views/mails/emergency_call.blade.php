<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Solicitud de contacto</title>
</head>
<body>
    <p>Hola! Tienes una nueva notificacion.</p>
    <p>Estos son los datos del usuario que desea comunicarse contigo:</p>
    <ul>
        <li>Nombre: {{ $nombre1 }} {{$nombre2}}</li>
        <li>Email: {{ $email }}</li>
        <li>Compañia: {{ $compania }}</li>
        <li>Numero: {{ $phone }}</li>
    </ul>
</body>
</html>
