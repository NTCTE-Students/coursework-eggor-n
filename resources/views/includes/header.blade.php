<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/pikaday.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top portfolio-navbar gradient navbar-dark">
        <div class="container"><a class="navbar-brand logo" href="{{ url('/') }}">Postinger</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @guest
                    <li class="nav-item"><a class="nav-link" href={{ url('/register') }}>Регистрация</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Авторизация</a></li>
                    @endguest
                    <li class="nav-item"><a class="nav-link" href={{ url('/galery') }}>Галерея</a></li>
                    @auth
                    <li class="nav-item"><a class="nav-link active" href={{ url('/createposts') }}>Создать пост</a></li>
                    <li class="nav-item"><a class="nav-link active" href={{ url('/deleteposts') }}>Удалить пост</a></li>
                    <li class="nav-item"><a class="nav-link active" href={{ url('/updateposts') }}>Редактировать пост</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ url('/logout') }}>Выйти</a></li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
