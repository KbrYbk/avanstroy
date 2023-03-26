<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '«Аванстрой»') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- ico -->
    <link rel="shortcut icon" href="{{ url('img/icon')}}/kirpic.ico" type="image/x-icon"><!--иконка в открытой вкладке-->

    <!-- css -->
    <link rel="stylesheet" href=" {{ url('/') }}/style.css">
</head>

<body>
    <header id="app">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid hu">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button><!--кнопка для мобильных приложений-->

                <div class="logo d-flex"><!--логотип компании-->
                    <a class="navbar-brand" href="{{url('/')}}"><!--при нажатии на лого кидает на главную страницу-->
                        <img class="logo_img" src="{{url('img')}}/logo.png"><!--картинка логотипа-->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{url('catalog')}}">
                                Наши изделия
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#mehanizm">
                                Механизм приобретения блоков
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#kontakty">
                                Наши Контакты
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="adres d-flex mx-3">
                    <object type="image/svg+xml" data="{{url('svg')}}/mapflag.svg">
                    </object><!--svg маркер местоположения-->
                    <p class="Omsk">Омск, Новороссийская улица, 4<br></p>
                </div>
                <div class="navbar_phone mx-3">
                    <a href="tel:+79293684677">+7 929 368-46-77</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-4"><!--контент страниц-->
        @yield('content')
    </main>
    <!-- _______________________________________________________________________________________________________ -->
    <footer><!--подвал сайта-->
        <div class="container">
            <div class="logofooter">
                <img class="logo_img" src="{{url('img')}}/logo.png">
                <p class="ooo my-3">© 2022 «Аванстрой»</p>
            </div>
        </div>
    </footer>
</body>

</html>