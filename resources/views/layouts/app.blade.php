<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .portfolio-table {
            width: 100%;
            border-collapse: collapse;
        }
        .portfolio-table th, .portfolio-table td {
            border: 1px solid #e2e8f0;
            padding: 1rem;
            text-align: left;
        }
        .portfolio-table th {
            background-color: #f7fafc;
            font-weight: 600;
        }
        .nav-item {
            transition: all 0.3s ease;
        }
        .nav-item:hover {
            background-color: #edf2f7;
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold">My Portfolio</div>
                <div class="space-x-4">
                    @foreach(['home', 'skills', 'projects', 'academic', 'achievements', 'about', 'contact'] as $page)
                        <a href="{{ route($page) }}" 
                           class="text-gray-700 hover:text-blue-600 {{ request()->routeIs($page) ? 'text-blue-600 font-medium' : '' }}">
                            {{ ucfirst($page) }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-8 py-4">
        <div class="container mx-auto px-4 text-center text-gray-600">
            &copy; {{ date('Y') }} My Portfolio. All rights reserved.
        </div>
    </footer>

    @yield('scripts')
</body>
</html>