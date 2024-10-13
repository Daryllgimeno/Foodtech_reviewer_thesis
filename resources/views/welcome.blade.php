<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            nav {
                position: absolute;
                top: 20px;
                right: 10px;
                margin-right: 80px;
            }

            nav a {
                margin-right: 20px;
            }
            .btn + .btn {
                margin-left: 10px;
                margin-right: 10px;
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav>
            <a href="about" class="btn btn-dark mr-2">About</a>
            <a href="contact" class="btn btn-dark">Contact us</a>
        </nav>

        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <a href="student" class="btn btn-success btn-lg mx-2">Student</a>
            <a href="faculty" class="btn btn-success btn-lg mx-2">Faculty</a>
        </div>

    </body>






</html>
