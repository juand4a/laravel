<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación Laravel</title>
    <!-- Aquí puedes agregar enlaces a tus archivos CSS, como Bootstrap o tu propio archivo CSS -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <!-- Aquí es donde se insertará el contenido de las vistas hijas -->
        @yield('content')
    </div>

    <!-- Aquí puedes agregar enlaces a tus archivos JS -->
</body>
</html>