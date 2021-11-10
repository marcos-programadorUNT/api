<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>SU PRÉSTAMO HA SIDO SOLICITADO EXITOSAMENTE</p>

    <p>Datos del cliente:</p>
    <ul>
        <li>DNI: {{ $cliente->dniCliente }}</li>
        <li>Nombre: {{ $cliente->nombreCliente }}</li>
        <li>Dirección: {{ $cliente->direccionCasaCliente }}</li>
        <li>Email: {{ $cliente->emailCliente }}</li>
        <li>Celular: {{ $cliente->celularCliente }}</li>
    </ul>

    <p>Datos del préstamo:</p>
    <ul>
        <li>Monto: {{ $prestamo->montoPrestamo }}</li>
        <li>Fecha que se hizo el préstamo: {{ $prestamo->fechaPrestamo }}</li>
        <li>Estado: {{ $prestamo->estadoPrestamo }}</li>
    </ul>


</body>
</html>