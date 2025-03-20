<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Trincket Place</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-image {
            background: url('{{ asset('images/logo.png') }}') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col justify-between items-center min-h-screen text-center bg-image">
    
    <!-- Título centrado arriba -->
    <header class="w-full p-4">
        <h1 class="text-4xl font-bold text-white bg-blue-500 p-4 rounded-md">Bienvenido a Trincket Place</h1>
    </header>
    
    <!-- Barra de búsqueda -->
    <div class="flex-grow flex flex-col justify-center items-center w-full h-full bg-opacity-50">
        <div class="mt-6 w-full max-w-md flex bg-white p-4 rounded-lg shadow-lg">
            <input type="text" id="searchInput" placeholder="Buscar productos..." 
                class="w-full p-3 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button onclick="searchProducts()" class="bg-blue-500 text-white px-6 py-3 rounded-r-lg hover:bg-blue-600 transition">
                🔍 Buscar
            </button>
        </div>
        
        <!-- Resultados de búsqueda -->
        <ul id="searchResults" class="mt-4 w-full max-w-md text-left bg-white shadow-lg rounded-lg hidden"></ul>
    </div>
    
    <!-- Footer -->
    <footer class="bg-blue-500 text-white p-4 w-full text-center mt-6">
        <p class="text-lg">Síguenos en nuestras redes sociales:</p>
        <div class="flex justify-center space-x-6 mt-2">
            <a href="#" class="hover:underline">Facebook</a>
            <a href="#" class="hover:underline">Instagram</a>
            <a href="#" class="hover:underline">Twitter</a>
        </div>
        <p class="mt-4">&copy; 2025 Trincket Place - Todos los derechos reservados.</p>
    </footer>

    <!-- Script de búsqueda -->
    <script>
        const productos = ["Celular", "Laptop", "Auriculares", "Cámara", "Smartwatch", "Teclado", "Mouse"];
        
        function searchProducts() {
            let input = document.getElementById("searchInput").value.toLowerCase();
            let results = productos.filter(producto => producto.toLowerCase().includes(input));
            let resultsContainer = document.getElementById("searchResults");
            
            resultsContainer.innerHTML = "";
            if (input === "") {
                resultsContainer.classList.add("hidden");
                return;
            }
            
            results.forEach(producto => {
                let li = document.createElement("li");
                li.textContent = producto;
                li.classList.add("p-3", "border-b", "hover:bg-gray-100", "cursor-pointer");
                resultsContainer.appendChild(li);
            });
            resultsContainer.classList.remove("hidden");
        }
    </script>
</body>
</html>
