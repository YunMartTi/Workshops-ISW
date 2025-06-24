<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido - Yunior Martínez</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #212529;
            color: white;
        }
        .welcome-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .btn-custom {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 18px;
            border-radius: 8px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1 class="mb-4 border border-gray-100">Bienvenido a mi portafolio</h1>
        <p class="mb-4">Soy Yunior Martínez Tinoco, estudiante de Ingeniería del Software.<br>Enlaces:</p>
        <a href="Workshop1/index.php" class="btn btn-custom">📄 Workshop1 -> Prueba</a><br>
        <a href="Workshop2/index.html" class="btn btn-custom">📄 Workshop2 -> Curriculum</a><br>
        <a href="Workshop3/index.html" class="btn btn-custom">📄 Workshop3 -> Noticiero</a><br>
        <a href="Workshop4/index.html" class="btn btn-custom">📄 Workshop4 -> Producto</a>
    </div>
</body>
</html>
