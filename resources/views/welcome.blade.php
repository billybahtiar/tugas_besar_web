<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Mega Tour & Travel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('public/images/1.jpeg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .content {
            position: relative;
            z-index: 2;
        }
        h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }
        .btn-custom {
            background-color: #ff5722;
            border: none;
        }
        .btn-custom:hover {
            background-color: #ff784e;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>

    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100 content">
        <h1 class="mb-4 text-center">Selamat Datang Di Sistem Akademis</h1>
        <p class="lead text-center mb-4">Bersama Kita Bisa Cihuy.</p>
        <div class="text-center">
            <a href="/login" class="btn btn-custom btn-lg me-3">Login</a>
            <a href="/register" class="btn btn-outline-light btn-lg">Register</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
