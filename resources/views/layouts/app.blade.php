<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tarea Laravel</title>
    <style>
        /* --- Estilos Generales --- */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; background-color: #f4f4f4; }
        
        /* --- Barra de Navegación --- */
        nav { background-color: #333; padding: 1em; box-shadow: 0 2px 5px rgba(0,0,0,0.2); }
        nav a { color: white; margin-right: 20px; text-decoration: none; font-weight: bold; font-size: 1.1em; transition: color 0.3s; }
        nav a:hover { color: #facc15; /* Color amarillo suave */ }
        
        /* --- Contenedor Principal --- */
        .contenido { 
            padding: 40px; 
            min-height: 80vh; 
            max-width: 1000px;
            margin: 0 auto;
        }

        /* --- Footer --- */
        footer { background-color: #ddd; padding: 15px; text-align: center; position: fixed; bottom: 0; width: 100%; font-size: 0.9em; color: #555; }


        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            border-radius: 8px;
            overflow: hidden;
        }

        /* Encabezado de la tabla */
        thead tr {
            background-color: #333;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        /* Celdas y filas */
        th, td {
            padding: 12px 15px;
        }

        /* Líneas divisorias */
        tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        /* Efecto cebra (una gris, una blanca) para leer mejor */
        tbody tr:nth-of-type(even) {
            background-color: #f8f9fa;
        }

        /* Línea final más gruesa */
        tbody tr:last-of-type {
            border-bottom: 3px solid #333;
        }

        /* Efecto al pasar el mouse (Hover) */
        tbody tr:hover {
            background-color: #e2e6ea;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        /* Estilo para el título H1 o H2 */
        h1, h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/inicial">Inicio</a>
        <a href="/composer">Composer</a>
        <a href="/laravel">Laravel</a>
        <a href="/php">PHP</a>
        <a href="/productos">Productos</a>
    </nav>

    <div class="contenido">
        @yield('content')
    </div>

    <div style="height: 60px;"></div>

    <footer>
        <p>© 2025 - Yahir Del Angel Santiago - Todos los derechos reservados.</p>
    </footer>

</body>
</html>