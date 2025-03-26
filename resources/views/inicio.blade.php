<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body {
            background: url("{{ asset('images/logo.png') }}") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5); /* Ajusta la opacidad */
            z-index: -1;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Trincket Place</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #f4f4f4;">

    <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-3">Iniciar Sesión</h2>

        <form action="{{ route('inicio') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" autocomplete="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" autocomplete="current-password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
        </form>

        <p class="mt-3 text-center">
            ¿No tienes cuenta? <a href="{{ route('registro') }}" class="text-primary">Regístrate aquí</a>
        </p>
        
        <p class="mt-3">
            <a href="{{ route('home') }}" class="btn btn-secondary w-100">Volver a Inicio</a>
        </p>
    </div>

</body>
</html>
