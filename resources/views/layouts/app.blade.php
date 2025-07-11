<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f2d50f 0%, #da0641 100%);
            min-height: 100vh;
        }
        .blog-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            padding: 2rem;
            margin: 2rem auto;
            max-width: 600px;
        }
        .form-label {
            color: #da0641;
            font-weight: bold;
        }
        .btn-primary {
            background: linear-gradient(90deg, #f7971e 0%, #ffd200 100%);
            border: none;
            color: #222;
            font-weight: bold;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #ffd200 0%, #f7971e 100%);
            color: #fff;
        }
        .btn-secondary {
            background: #da0641;
            border: none;
        }
        .btn-secondary:hover {
            background: #a80038;
        }
        .form-control, textarea {
            border-radius: 10px;
            border: 2px solid #ffd200;
        }
        .form-control:focus, textarea:focus {
            border-color: #da0641;
            box-shadow: 0 0 0 0.2rem rgba(218,6,65,.25);
        }
        .alert-danger, .alert-success {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(90deg, #da0641, #f7971e);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('posts.index') }}">Laravel Blog</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
