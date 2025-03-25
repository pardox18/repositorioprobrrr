<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Trincket Place</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">

    <style>
body {
    background-color: #f3f4f6;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    min-height: 100vh;
    text-align: center;
}
.title {
    font-size: 40px;
}
header {
    width: 100%;
    padding: 1rem;
    background-color: #3b82f6;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

h1 {
    font-size: 3.0rem;
    font-weight: bold;
    text-align: center;
}

.header-buttons {
    display: flex;
    gap: 1rem;
}

.button {
    background-color: white;
    color: #3b82f6;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    transition: background-color 0.3s;
    text-decoration: none;
    display: inline-block;
}

.button:hover {
    background-color: #e5e7eb;
}

.search-container {
    padding: 20px;
    position: absolute;
    top: 80px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: center;
    align-items: center;
}

.search-box {
    width: 100%;
    max-width: 400px;
    display: flex;
    background: white;
    padding: 0.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.search-input {
    flex: 1;
    padding: 0.5rem;
    border: 1px solid #d1d5db;
    border-radius: 0.375rem 0 0 0.375rem;
    outline: none;
}

.search-button {
    background-color: #3b82f6;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0 0.375rem 0.375rem 0;
    cursor: pointer;
    transition: background-color 0.3s;
}

.search-button:hover {
    background-color: #2563eb;
}

footer {
    background-color: #3b82f6;
    color: white;
    padding: 1rem;
    width: 100%;
    text-align: center;
    margin-top: 1rem;
}

    </style>
</head>
<body class="bg-gray-100 flex flex-col justify-between items-center min-h-screen text-center">
    
    <!-- Encabezado con botones separados -->
    <header class="header">
        <h1 class="title">Trincket Place</h1>
        <div class="header-buttons">
        <a href="{{ route('registro') }}" class="button">Registro</a>
        <a href="{{ url('/login') }}" class="button">Iniciar sesión</a>
        

        </div>
    </header>
    
    <!-- Barra de búsqueda subida -->
    <div class="search-container">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Buscar productos..." class="search-input">
            <button onclick="searchProducts()" class="search-button">🔍 Buscar</button>
        </div>
        <ul id="searchResults" class="search-results hidden"></ul>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <p class="footer-text">Síguenos en nuestras redes sociales:</p>
        <div class="social-links">
            <a href="#" class="social-link">Facebook</a>
            <a href="#" class="social-link">Instagram</a>
            <a href="#" class="social-link">Twitter</a>
        </div>
        <p class="footer-copy">&copy; 2025 Trincket Place - Todos los derechos reservados.</p>
    </footer>

    <!-- Script de búsqueda -->
    <script src="script.js"></script>
</body>
</html>
