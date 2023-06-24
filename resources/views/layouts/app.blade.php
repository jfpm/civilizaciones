<!DOCTYPE html5>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!--datatables -->
    <!--CSS DataTables-->
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/usuarios.css'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Egyptian&display=swap');

        canvas {
            display: block;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex-grow: 1;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .modal {
            position: fixed;
            /* Cambia la posición a "fixed" */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 20px;
            max-height: calc(100vh - 3rem);
            /* Altura máxima del contenido */
            overflow-y: auto;
        }

        .modal-close {
            position: relative;
            top: 0;
            right: 0;
            padding: 0.5rem;
            cursor: pointer;
            font-size: 28px;
        }
    </style>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="content mb-4">
            {{ $slot }}
        </main>

    </div>
    <footer>
        <div class="container mx-auto text-center mt-3">
            <p><a href="{{ route('terminos') }}" title="Ver términos y datos personales">&copy; 2023
                    {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</a></p>
        </div>
    </footer>
</body>

</html>
