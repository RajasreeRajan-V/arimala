<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Arimala Hospital') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --heading-color: #0E4968;
            --accent-color: #107A7C;
        }

        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f5f7f9;
        }

        .heading-color {
            color: var(--heading-color);
        }

        .btn-accent {
            background-color: var(--accent-color);
            color: #fff;
        }

        .btn-accent:hover {
            background-color: #0c6466;
        }

        .navbar-brand,
        .nav-link.active {
            color: #0E4968;
        }

        .nav-link:hover {
            color: #107A7C;
        }

        .text-heading {
            color: #0E4968;
        }

        .sidebar {
            width: 240px;
            min-height: 100vh;
        }

        .sidebar .nav-link {
            color: #333;
            padding: 10px 14px;
            border-radius: 6px;
        }

        .sidebar .nav-link:hover {
            background-color: #f1f7f7;
            color: #107A7C;
        }

        .sidebar .nav-link.active {
            background-color: #107A7C;
            color: #ffffff;
        }
    </style>
</head>

<body>

    @include('layouts.navigation')
    @include('layouts.sidebar')

    <main class="container py-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>