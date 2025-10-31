<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyShop')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="container">
        <h1>MyShop - Интернет магазин</h1>
    </div>
</header>
<nav class="navbar">
    <div class="container">
        <ul class="nav-list">
            <li>
                <a class="nav-link" href="#">Главная</a>
            </li>
            <li>
                <a class="nav-link" href="#">Каталог</a>
            </li>
            <li>
                <a class="nav-link" href="#">Контакты</a>
            </li>
        </ul>
    </div>
</nav>
<main class="container">
    @yield('content')
</main>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>MyShop. Все права защищены.</p>
    </div>
</footer>
</body>
</html>
