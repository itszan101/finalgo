<!DOCTYPE html>
<html lang="en" class="dark">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        (function() {
            const savedTheme = localStorage.getItem("theme");

            if (savedTheme === "dark") {
                document.documentElement.classList.add("dark");
            } else if (savedTheme === "light") {
                document.documentElement.classList.remove("dark");
            } else if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
                document.documentElement.classList.add("dark");
            }
        })();
    </script>

</head>

<body
    class="bg-background-light dark:bg-background-dark font-[Manrope] text-slate-900 dark:text-slate-100 min-h-screen">

    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">

        <div class="flex flex-col flex-1">

            @include('dashboard.components.header')

            <main class="flex-1 px-6 py-8 max-w-[1200px] mx-auto w-full flex flex-col gap-8">

                @yield('content')

            </main>

        </div>

    </div>

</body>

</html>
