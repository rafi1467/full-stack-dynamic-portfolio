<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
        }
        
        /* Navigation Styles */
        .main-nav {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #2c3e50;
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .nav-links a:hover {
            background-color: #f0f0f0;
            color: #2c3e50;
        }
        
        .nav-links a.active {
            color: #3498db;
            background-color: #ebf5fb;
        }
        
        /* Main Content Area */
        main {
            flex: 1;
            padding: 2rem 0;
        }
        
        /* Portfolio Table Styles */
        .portfolio-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 2rem;
        }
        
        .portfolio-table th {
            background-color: #2c3e50;
            color: white;
            padding: 1.5rem;
            text-align: center;
            font-weight: 600;
            font-size: 1.1rem;
            border-right: 1px solid #34495e;
        }
        
        .portfolio-table th:last-child {
            border-right: none;
        }
        
        .portfolio-table td {
            padding: 2rem;
            border-top: 1px solid #eee;
            vertical-align: top;
        }
        
        .section-title {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
            border-left: 4px solid #3498db;
        }
        
        /* Content Grid for Projects, Skills, etc. */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 1rem;
            padding-bottom: 2rem; /* Added padding at bottom */
        }
        
        .content-card {
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 250px; /* Fixed height for cards */
            display: flex;
            flex-direction: column;
        }
        
        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .card-title {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        
        .card-subtitle {
            color: #7f8c8d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            font-style: italic;
        }
        
        .card-description {
            color: #555;
            line-height: 1.6;
            flex: 1; /* Makes description take available space */
        }
        
        /* Footer Styles */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 2rem 0;
            margin-top: auto; /* Pushes footer to bottom */
            width: 100%;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .footer-links {
            display: flex;
            gap: 1.5rem;
        }
        
        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        /* Page Title */
        .page-title {
            text-align: center;
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #3498db;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }
            
            .portfolio-table th,
            .portfolio-table td {
                padding: 1rem;
                font-size: 0.9rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
            
            .content-grid {
                grid-template-columns: 1fr;
            }
            
            .page-title {
                font-size: 2rem;
            }
        }
        
        /* Project List Styles */
        .project-list {
            list-style: none;
        }
        
        .project-item {
            padding: 1rem;
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s ease;
        }
        
        .project-item:hover {
            background-color: #f9f9f9;
        }
        
        .project-item:last-child {
            border-bottom: none;
        }
        
        .project-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        
        .project-description {
            color: #666;
            font-size: 0.95rem;
        }
        
        /* Skill Bars */
        .skill-container {
            margin-bottom: 1.5rem;
        }
        
        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }
        
        .skill-bar {
            height: 8px;
            background-color: #ecf0f1;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .skill-level {
            height: 100%;
            background: linear-gradient(90deg, #3498db, #2980b9);
            border-radius: 4px;
            transition: width 1s ease-in-out;
        }
        
        /* Contact Form Styles */
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #2c3e50;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }
        
        .btn {
            background-color: #3498db;
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .btn:hover {
            background-color: #2980b9;
        }
        
        .btn-primary {
            background-color: #3498db;
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
        }
        
        /* Button Container for Project Links */
        .button-container {
            display: flex;
            gap: 1rem;
            margin-top: auto; /* Pushes buttons to bottom of card */
            padding-top: 1rem;
        }
        
        .btn-github {
            background-color: #2c3e50;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        
        .btn-github:hover {
            background-color: #1a252f;
        }
        
        .btn-demo {
            background-color: #3498db;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        
        .btn-demo:hover {
            background-color: #2980b9;
        }
        
        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #7f8c8d;
            background-color: white;
            border-radius: 8px;
            margin: 2rem 0;
        }
        
        /* Loading State */
        .loading {
            text-align: center;
            padding: 3rem;
            color: #3498db;
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="main-nav">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="logo">My Portfolio</a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'active' : '' }}">Skills</a></li>
                <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects*') ? 'active' : '' }}">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact*') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <div>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</div>
            <div class="footer-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('skills') }}">Skills</a>
                <a href="{{ route('projects') }}">Projects</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to adjust main content minimum height
        function adjustMainHeight() {
            const main = document.querySelector('main');
            const nav = document.querySelector('.main-nav');
            const footer = document.querySelector('footer');
            
            if (main && nav && footer) {
                const windowHeight = window.innerHeight;
                const navHeight = nav.offsetHeight;
                const footerHeight = footer.offsetHeight;
                const mainHeight = main.offsetHeight;
                
                // If main content is too short, set min-height
                const minHeight = windowHeight - navHeight - footerHeight - 100;
                if (mainHeight < minHeight) {
                    main.style.minHeight = minHeight + 'px';
                }
            }
        }
        
        // Adjust on load and resize
        adjustMainHeight();
        window.addEventListener('resize', adjustMainHeight);
        
        // Also adjust after images load
        window.addEventListener('load', adjustMainHeight);
    });
</script>

    @yield('scripts')
</body>
</html>