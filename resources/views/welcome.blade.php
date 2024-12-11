<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Tech Reviewer</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset('Bulsu-background.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        nav {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        nav a {
            margin-right: 15px;
        }

        .btn + .btn {
            margin-left: 10px;
        }

        .content {
            text-align: center;
            margin-top: 20vh;
        }

        .content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .content .btn {
            font-size: 1.2rem;
            padding: 10px 30px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="about" class="btn btn-outline-light">About</a>
        <a href="contact" class="btn btn-outline-light">Contact Us</a>
    </nav>

    <div class="content">
        <h1>Food Technology Reviewer</h1>
        <p>Your gateway to mastering food technology concepts and board exam preparation.</p>
        <div>
            <a href="login" class="btn btn-primary">Login as Student</a>
            <a href="faculty" class="btn btn-secondary">Login as Faculty</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
