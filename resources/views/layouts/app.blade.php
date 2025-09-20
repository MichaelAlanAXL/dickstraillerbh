<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Dick's Trailler</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="bg-warning text-white p-4">
        <h1 class="text-center">Dick's Trailler</h1>
        <nav class="text-center">
            <a href="/" class="text-white mx-3">Home</a>
            <a href="/about" class="text-white mx-3">About</a>
            <a href="/contact" class="text-white mx-3">Contact</a>
        </nav>
    </header>

    <!-- Main content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3">
        Avenida Abílio Machado 2177, Bairro Alípio de Melo – Telefone: (31) 3474-4957
    </footer>
</body>
</html>
