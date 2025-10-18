<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        /* Navbar container */
        .navbar-flex {
            display: flex;
            justify-content: space-between; /* Nickname left, links right */
            align-items: center;
            background-color: #1e293b; /* dark navy */
            color: white;
            padding: 15px 40px; /* top-bottom / left-right spacing */
            border-bottom: 3px solid #3b82f6; /* blue border */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            box-sizing: border-box;
        }

        /* Left side (nickname) */
        .nickname {
            font-size: 1.6rem;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        /* Right side (links) */
        .nav-links {
            display: flex;
            gap: 25px; /* space between links */
            margin: 0;
            padding: 0;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            padding: 8px 14px;
            border-radius: 6px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .nav-links a:hover {
            border-color: #3b82f6;
            background-color: #3b82f6;
            color: #fff;
        }

        /* Page content */
        .page-content {
            margin-top: 90px; /* Prevent hiding behind navbar */
            padding: 20px;
            text-align: center;
            color: #374151;
        }
    </style>
</head>
<body>
    <header class="navbar-flex">
        <div class="nickname">Nick Name</div>
        <nav class="nav-links">
            <a href="/">Home</a>
            <a href="/skills">Skills</a>
            <a href="/projects">Projects</a>
            <a href="/academic">Academic</a>
            <a href="/achievements">Achievements</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>
</body>
</html>

