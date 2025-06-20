<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #e63946; /* accent merah */
            --sidebar-bg: #2c2f35;
            --sidebar-icon-size: 1rem;
            --sidebar-width: 250px;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: #333;
            overflow-x: hidden;
        }

        #sidebar {
            background-color: var(--sidebar-bg);
            width: var(--sidebar-width);
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            overflow-y: auto;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 1.2rem 1.5rem;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .sidebar-header h3 {
            color: #fff;
            font-size: 1rem;
            margin: 0;
            font-weight: 600;
        }

        .sidebar-header .logo-icon {
            font-size: 1.3rem;
            margin-right: 0.75rem;
            color: #fff;
        }

        .sidebar-menu {
            list-style: none;
            margin: 0;
            padding: 1rem 0;
        }

        .sidebar-menu li {
            margin: 0.2rem 0.8rem;
            border-radius: 6px;
        }

        .sidebar-menu li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 0.65rem 1rem;
            font-size: 0.9rem;
            border-radius: 6px;
            transition: 0.2s;
        }

        .sidebar-menu li a:hover {
            background-color: #3b3f46;
            color: #fff;
        }

        .sidebar-menu li.active a {
            background-color: var(--primary-color);
            color: #fff;
            font-weight: 500;
        }

        .menu-icon {
            width: 20px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin-right: 12px;
            font-size: var(--sidebar-icon-size);
            color: #bbb;
        }

        .sidebar-footer {
            padding: 1rem;
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.4);
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        #main-content {
            margin-left: var(--sidebar-width);
            padding: 20px;
            min-height: 100vh;
            background-color: #f8fafc;
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            #sidebar {
                transform: translateX(-100%);
            }

            #sidebar.active {
                transform: translateX(0);
            }

            #main-content {
                margin-left: 0;
            }
        }

        .stat-card {
            transition: all 0.3s ease;
            background-color: white;
            border-radius: 8px;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
    </style>
    @yield('styles')
</head>
<body>
    @include('partials.sidebar')

    <div id="main-content">
        @include('partials.navbar')

        <main class="container-fluid py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.pathname;
            const menuLinks = document.querySelectorAll('.sidebar-menu a[href]');

            menuLinks.forEach(link => {
                if (link.getAttribute('href') === currentUrl) {
                    link.parentElement.classList.add('active');
                }
            });
        });
    </script>

    @yield('scripts')
</body>
</html>
