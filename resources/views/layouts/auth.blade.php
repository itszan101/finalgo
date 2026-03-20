<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Finalgo' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
    </style>

    @stack('styles')

</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex items-center justify-center p-4 font-display">

    @yield('content')

    @stack('scripts')

</body>

</html>
