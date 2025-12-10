<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer</title>
</head>

<body>
    @extends('layouts.app') @section('content')

    <h1>Composer</h1>
    <p>Composer es un gestor de dependencias para PHP que facilita la instalación, actualización y gestión de bibliotecas y paquetes de terceros en tus proyectos.
        Permite declarar qué paquetes necesita un proyecto en un archivo de configuración
        (composer.json), y luego Composer se encarga automáticamente de descargarlos e
        instalarlos en una carpeta (vendor). También proporciona un autoloader para cargar
        las clases de todas las bibliotecas instaladas. . </p>
    @endsection
</body>

</html>