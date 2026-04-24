<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AgriSenso</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative min-h-screen font-sans antialiased text-white overflow-x-hidden">

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

@yield('content')

</body>
</html>