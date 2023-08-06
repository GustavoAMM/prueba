<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 p-4 text-white">
        <h1 class="text-2xl">Escuela México</h1>
    </header>

    <div class="container mx-auto p-4 content">
        @yield('content')
    </div>

    <footer class="bg-gray-300 p-4 text-center">
        <p>Escuela México &copy; {{ date('Y') }}</p>
    </footer>
</body>
</html>
