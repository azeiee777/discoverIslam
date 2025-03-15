<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Discover Islam')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <style>
        /* Custom styles for sidebar behavior */
        #sidebar {
            transition: all 0.3s;
            min-width: 200px;
            width: 200px;
            position: fixed;
            height: 100vh;
            z-index: 1030;
            display: flex;
            flex-direction: column;
            left: 0;
            flex-shrink: 0;
        }

        #sidebar.collapsed {
            left: -200px;
            margin-left: 0;
            min-width: 0;
            width: 0;
        }

        /* Sidebar inner structure */
        .sidebar-header {
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-content {
            flex-grow: 1;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .sidebar-footer {
            padding: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Navbar positioning fix */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1020;
            width: 100%;
        }

        /* Toggle button positioning */
        #sidebarCollapse {
            background: transparent;
            border: none;
            color: white;
            cursor: pointer;
            position: relative;
            z-index: 1040;
        }

        /* Main content positioning */
        .content-wrapper {
            transition: all 0.3s;
            margin-left: 200px;
            width: calc(100% - 200px);
            min-height: 100vh;
            flex-grow: 1;
        }

        body:has(#sidebar.collapsed) .content-wrapper,
        .sidebar-collapsed .content-wrapper {
            margin-left: 0;
            width: 100%;
        }

        /* Mobile responsive behavior */
        @media (max-width: 768px) {
            #sidebar {
                left: -200px;
            }

            #sidebar.active {
                left: 0;
            }

            .content-wrapper {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    <div class="container-fluid p-0 d-flex flex-column min-vh-100">
        <div class="d-flex position-relative">
            <!-- Sidebar -->
            <div id="sidebar" class="bg-dark">
                @include('admin::components.sidebar')
            </div>

            <!-- Main Content -->
            <div class="content-wrapper d-flex flex-column">
                @include('admin::components.navbar')

                <div class="container-fluid p-4 flex-grow-1">
                    <!-- Page Content -->
                    @yield('content')
                </div>

                <!-- Footer -->
                @include('admin::components.footer')
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (with Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarCollapse');
            const sidebar = document.getElementById('sidebar');

            if (sidebarToggle && sidebar) {
                // Track sidebar state
                let sidebarCollapsed = window.innerWidth < 768;

                // Set initial state
                if (sidebarCollapsed) {
                    sidebar.classList.add('collapsed');
                }

                sidebarToggle.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent any default behavior
                    e.stopPropagation(); // Stop event bubbling

                    sidebarCollapsed = !sidebarCollapsed;

                    if (sidebarCollapsed) {
                        sidebar.classList.add('collapsed');
                    } else {
                        sidebar.classList.remove('collapsed');
                    }
                });
            }

            // Handle window resize separately from toggle
            window.addEventListener('resize', function() {
                // Only auto-collapse on initial resize, not during user interaction
                if (window.innerWidth < 768 && !sidebar.classList.contains('user-toggled')) {
                    sidebar.classList.add('collapsed');
                } else if (window.innerWidth >= 768 && !sidebar.classList.contains('user-toggled')) {
                    sidebar.classList.remove('collapsed');
                }
            });
        });
    </script>

    <script src="{{ asset('js/admin.js') }}"></script>

    @stack('scripts')
</body>

</html>
