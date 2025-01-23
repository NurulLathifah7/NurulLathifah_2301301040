<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background: linear-gradient(135deg, #FFFAF0, #F0F8FF);
                color: #333;
                margin: 0;
                line-height: 1.6;
                padding: 20px;
                background-image: url('https://www.transparenttextures.com/patterns/light-paper.png');
            }
            header {
                padding: 40px 0;
                background: linear-gradient(135deg, #FF2D20, #FF6A20);
                color: white;
                text-align: center;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            }
            .nav-link {
                margin: 0 15px;
                padding: 10px 20px;
                border-radius: 5px;
                transition: background-color 0.3s, color 0.3s;
                display: inline-block;
                text-decoration: none;
                color: white;
                font-weight: 600;
            }
            .nav-link:hover {
                background-color: rgba(255, 255, 255, 0.2);
            }
            .container {
                max-width: 1200px;
                margin: auto;
                padding: 0 20px;
            }
            h2 {
                font-size: 2.5em;
                margin: 20px 0;
                color: #FF2D20;
            }
            .grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 20px;
                margin-top: 20px;
            }
            .card {
                background: white;
                border-radius: 10px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;
                padding: 20px;
                text-align: center;
                position: relative;
                overflow: hidden;
                border: 1px solid #f0f0f0;
            }
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            }
            .card img {
                width: 100%;
                height: auto;
                border-radius: 10px 10px 0 0;
            }
            .card h3 {
                margin: 15px 0;
                font-size: 1.5em;
                color: #333;
            }
            .card p {
                color: #666;
            }
            .footer {
                text-align: center;
                padding: 20px 0;
                background-color: #f1f1f1;
                color: #666;
                position: relative;
                bottom: 0;
                width: 100%;
                font-size: 0.9em;
            }
            @media (max-width: 768px) {
                .grid {
                    grid-template-columns: 1fr;
                }
                header {
                    padding: 20px 0;
                }
            }
        </style>
    @endif
</head>
<body>
    <header>
        <h1>Welcome to Laravel</h1>
        <nav>
            @if (Route::has('login'))
                <div class="nav-links">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>

    <main>
        <div class="container">
            <h2 class="text-center">Explore Laravel</h2>
            <div class="grid">
                <a href="https://laravel.com/docs" class="card">
                    <img src="https://laravel.com/assets/img/welcome/docs-light.svg" alt="Documentation">
                    <h3>Documentation</h3>
                    <p>Comprehensive documentation covering every aspect of the framework.</p>
                </a>
                <a href="https://laracasts.com" class="card">
                    <img src="https://laravel.com/assets/img/welcome/laracasts-light.svg" alt="Laracasts">
                    <h3>Laracasts</h3>
                    <p>Thousands of video tutorials to enhance your development skills.</p>
                </a>
                <a href="https://laravel-news.com" class="card">
                    <img src="https://laravel.com/assets/img/welcome/news-light.svg" alt="Laravel News">
                    <h3>Laravel News</h3>
                    <p>Community-driven portal for the latest Laravel news and updates.</p>
                </a>
                <a href="https://forge.laravel.com" class="card">
                    <img src="https://laravel.com/assets/img/welcome/forge-light.svg" alt="Vibrant Ecosystem">
                    <h3>Vibrant Ecosystem</h3>
                    <p>Tools and libraries to take your projects to the next level.</p>
                </a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
    </footer>
</body>
</html>
