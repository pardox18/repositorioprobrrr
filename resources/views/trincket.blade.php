<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Trincket Place</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* 🌟 Estilos generales */
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

        /* 🔹 Estilos del encabezado */
        header {
            width: 100%;
            padding: 1rem;
            background-color: rgba(59, 130, 246, 0.9); /* Transparencia para mejor legibilidad */
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* 🏷️ Estilos del título */
        h1 {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
        }

        /* 🎛️ Estilos de los botones del encabezado */
        .header-buttons {
            display: flex;
            gap: 1rem;
        }

        /* 🔵 Estilos generales de los botones */
        .button {
            background-color: white;
            color: #3b82f6;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        /* ✨ Efecto hover para los botones */
        .button:hover {
            background-color: #e5e7eb;
        }

        /* 🔍 Estilos de la barra de búsqueda */
        .search-container {
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* 📦 Estilos del input de búsqueda */
        .search-box {
            width: 100%;
            max-width: 400px;
            display: flex;
            background: white;
            padding: 0.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* 🔎 Estilos del botón de búsqueda */
        .search-button {
            background-color: #3b82f6;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0 0.375rem 0.375rem 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* 🎨 Efecto hover del botón de búsqueda */
        .search-button:hover {
            background-color: #2563eb;
        }

        /* 📌 Estilos del pie de página */
        footer {
            background-color: rgba(59, 130, 246, 0.9);
            color: white;
            padding: 1rem;
            width: 100%;
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <!-- Encabezado con botones separados -->
    <header>
        <h1>Trincket Place Pardo</h1>
        <div class="header-buttons">
            <a href="{{ route('registro') }}" class="button">Registro</a>
            <a href="{{ route('inicio') }}" class="button">Iniciar Sesión</a>
        </div>
    </header>
    
    <!-- Barra de búsqueda -->
    <div class="search-container">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Buscar productos..." class="search-input">
            <button onclick="searchProducts()" class="search-button">🔍 Buscar</button>
        </div>
        <ul id="searchResults" class="search-results hidden"></ul>
    </div>
    
    <!-- Footer -->
    <footer>
        <p>Síguenos en nuestras redes sociales:</p>
        <div>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
        </div>
        <p>&copy; 2025 Trincket Place - Todos los derechos reservados.</p>
    </footer>

    <!-- Script de búsqueda -->
    <script src="script.js"></script>
</body>
</html>
