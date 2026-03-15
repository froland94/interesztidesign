<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Intereszti Design') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        body {
            font-family: 'Outfit', sans-serif;
            overflow-x: hidden;
        }

        .hero-zoom {
            animation: zoom-in 20s ease-in-out infinite alternate;
        }

        @keyframes zoom-in {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }

        .service-card {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            background-color: white;
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body class="antialiased bg-white text-neutral-900">
    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
