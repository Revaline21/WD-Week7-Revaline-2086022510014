<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css',])
</head>

<body class="min-h-screen flex flex-col">
    @include('partial.navbar')

    <main class="flex-1 pb-16">
        @yield('content')
    </main>

    @include('partial.footer')
</Body>
</html>