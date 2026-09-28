<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel Site')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; color: #222; }
        header { background: #2d3748; color: white; padding: 1rem 2rem; }
        nav a { color: white; margin-right: 1rem; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        main { padding: 2rem; min-height: 60vh; }
        footer { background: #edf2f7; text-align: center; padding: 1rem; color: #555; }
    </style>
</head>
<body>

    <header>
        <h1>My Laravel Site</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} My Laravel Site. All rights reserved.
    </footer>

</body>
</html>
