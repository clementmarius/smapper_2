<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" rel="stylesheet" />

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const themeToggle = document.querySelector("#theme-toggle");
            const currentTheme = localStorage.getItem("theme") || "light";
            document.documentElement.setAttribute("data-theme", currentTheme);

            themeToggle.checked = currentTheme === "dark";

            themeToggle.addEventListener("change", function() {
                const theme = themeToggle.checked ? "dark" : "light";
                document.documentElement.setAttribute("data-theme", theme);
                localStorage.setItem("theme", theme);
            });
        });
    </script>
</head>

<body>

    <!-- Barre de navigation -->
    <nav class="container-fluid">
        <ul>
            <li><strong>Laravel</strong></li>
        </ul>
        <ul>
            @auth
            <li><a href="{{ url('/dashboard') }}" role="button">Dashboard</a></li>
            @else
            <li><a href="{{ route('login') }}" role="button">Login</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}" role="button" class="contrast">Register</a></li>
            @endif
            @endauth
            <li>
                <label for="theme-toggle">
                    <input type="checkbox" id="theme-toggle">
                    Mode sombre
                </label>
            </li>
        </ul>
    </nav>

    <main class="container">
        <h1>Bienvenue sur Smapper</h1>
        <p>Smapper is a global skate spot discovery app that helps riders find the best locations to skate around the world. With user-friendly features, it allows skaters to explore new spots, share their favorites, and connect with the global skateboarding community. Whether you're a local or traveling, Smapper guides you to the perfect place to ride.</p>
    </main>
</body>

</html>