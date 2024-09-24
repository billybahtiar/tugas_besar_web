<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to - Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/hero.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .content {
            position: relative;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 3.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        p.lead {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        .btn-custom {
            background-color: #ff5722;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #ff784e;
        }
        .btn-outline-light {
            border-color: #fff;
            color: #fff;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-outline-light:hover {
            background-color: #fff;
            color: #ff5722;
        }
        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            color: #fff;
        }
    </style>
</head>
<body>
   

    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100 content">
        <h1 class="mb-4">Selamat Datang Di Sistem Akademis</h1>
        <p class="lead mb-4">Bersama Kita Bisa Cihuy.</p>
        <div class="text-center">
            <a href="/login" class="btn btn-custom btn-lg me-3">Login</a>
            <a href="/register" class="btn btn-outline-light btn-lg">Register</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Sistem Akademik</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
