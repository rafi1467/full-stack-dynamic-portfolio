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
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
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
        
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 1rem;
        }
        
        .content-card {
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .card-title {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        
        .card-subtitle {
            color: #7f8c8d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .card-description {
            color: #555;
            line-height: 1.6;
        }
        
        /* Footer Styles */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
            text-align: center;
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
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        // Skill bar animation
        const skillBars = document.querySelectorAll('.skill-level');
        skillBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';
            setTimeout(() => {
                bar.style.width = width;
            }, 300);
        });
        
        // Form validation
        const contactForm = document.querySelector('.contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Message sent! (This is a demo)');
                this.reset();
            });
        }
        
        // Add active class to current page in navigation
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-links a');
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });
</script>

    @yield('scripts')
</body>
</html>