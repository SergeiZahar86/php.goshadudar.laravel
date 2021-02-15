<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, shrink-to-fit=no, user-scalable=no, initial-scale=1.0,
               maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
              crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark
             text-white border-bottom shadow-sm">
            <p class="h4 my-0 me-md-auto fw-normal text-info">SergeiProger</p>
            <nav class="my-2 my-md-0 me-md-3">
                <a class="p-2 navbar-brand text-white" href="/">Главная</a>
                <a class="p-2 navbar-brand text-white" href="/about">Обо мне</a>
            </nav>
            <a class="btn btn-warning btn-sm " href="/review">
                <h5 class="pt-1"> Отзывы</h5>
            </a>
        </header>
        <div class="container-fluid">
            <div class="col-6 mx-auto">
                @yield('main_content')
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
                integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
                integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
                crossorigin="anonymous"></script>
    </body>
</html>
