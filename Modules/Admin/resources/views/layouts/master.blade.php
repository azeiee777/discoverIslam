<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Discover Islam')</title>

    <!-- Bootstrap 4 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    @stack('styles')
</head>

<body>

    <!-- Sidebar -->
    @include('admin::components.sidebar')

    <div class="main-content">
        <!-- Navbar -->
        @include('admin::components.navbar')

        <div class="container-fluid p-4">
            <!-- Page Content -->
            @yield('content')
        </div>

        <!-- Footer -->
        @include('admin::components.footer')
    </div>

    <!-- Bootstrap 5 JS (with Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/admin.js') }}"></script>

    @stack('scripts')
</body>

</html>
