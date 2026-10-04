<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - SMKN 4 Bogor')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="../assets/Subtract.png" type="image/x-icon">
    @vite(['resources/js/app.js'])
    @stack('styles')
</head>
<body>

    @include('components.sidebar')

    <main style="margin-left:260px" class="p-4 p-md-4">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    @stack('scripts')
</body>
</html>