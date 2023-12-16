<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <style>
        #hero {
            width: 100%;
            height: 80vh;
            overflow: hidden;
            background-image: url(/images/hero.jpeg);
            background-position: 50% 20%;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card-block{
            height: 150px;
            overflow: hidden;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">Курсы.РУ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">О нас</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Зарегистрироваться</a>
                        </li>
                    @endguest
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users_page')}}">Моя страница</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users_page')}}">Выйти</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>


</body>
</html>
