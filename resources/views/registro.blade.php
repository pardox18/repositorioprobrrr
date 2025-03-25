<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Trincket Place</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4 text-center">Registro</h2>
        <form action="procesar_registro.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" class="w-full p-3 border rounded mb-3">
            <input type="email" name="email" placeholder="Correo Electrónico" class="w-full p-3 border rounded mb-3">
            <input type="password" name="password" placeholder="Contraseña" class="w-full p-3 border rounded mb-3">
            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600">Registrarse</button>
        </form>
        <p class="mt-4 text-center">
            ¿Ya tienes cuenta? <a href="index.html" class="text-blue-500 hover:underline">Iniciar sesión</a>
        </p>
    </div>

</body>
</html>
