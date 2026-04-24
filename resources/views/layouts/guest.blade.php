<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-white min-h-screen overflow-x-hidden">

        <!-- Grid Background -->
        <div class="fixed inset-0 -z-20"
             style="
                background-color:#020617;
                background-image:
                linear-gradient(rgba(255,255,255,0.07) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.07) 1px, transparent 1px);
                background-size:40px 40px;
             ">
        </div>

        <!-- Emerald Glow -->
        <div class="fixed top-[-200px] left-1/2 -translate-x-1/2
             w-[900px] h-[900px]
             bg-emerald-500/25 blur-[140px] -z-10">
        </div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-400" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white/10 dark:bg-white/10 backdrop-blur-lg border border-white/20 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
