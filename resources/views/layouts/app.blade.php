<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tu Aplicación</title>
    <!-- Agrega los estilos CSS de Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- Agrega los scripts JavaScript de Bootstrap (jQuery y Popper.js son necesarios) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- Agrega aquí tus enlaces a hojas de estilo CSS y scripts JS -->
</head>
<bodym class="cointeiner">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <h2><a class="navbar-brand" href="{{ url('/') }}">
                    Tu Aplicación
                </a></h2>
                <!-- Agrega aquí elementos del menú de navegación si es necesario -->
            </div>
        </nav>

        <main class="py-4">
            @yield('content') <!-- Esta línea permite la inserción de contenido dinámico -->
        </main>
    </div>

    <!-- Agrega aquí tus scripts JS al final del archivo si es necesario -->
</body>
</html>
