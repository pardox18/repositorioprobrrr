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
    <title>Registro - Trincket Place</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4 text-center">Registro</h2>
        <form action="procesar_registro.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" class="w-full p-3 border rounded mb-3" autocomplete="name" required>
            <input type="email" name="email" placeholder="Correo Electrónico" class="w-full p-3 border rounded mb-3" autocomplete="email" required>
            <input type="password" name="password" placeholder="Contraseña" class="w-full p-3 border rounded mb-3" autocomplete="new-password" required>
            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600 transition">Registrarse</button>
        </form>

        <p class="mt-4 text-center">
            ¿Ya tienes cuenta? 
            <a href="{{ route('inicio') }}" class="text-blue-500 hover:underline">Iniciar Sesión</a>
        </p>

        <p class="mt-4">
            <a href="{{ route('home') }}" class="block text-center bg-gray-500 text-white p-3 rounded hover:bg-gray-600 transition">Volver a Inicio</a>
        </p>
    </div>

</body>
</html>
