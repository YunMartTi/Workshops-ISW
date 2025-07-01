<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS</title>
    @vite('resources/css/app.css')



</head>
<body class="bg-gray-700 text-white text-center sm:bg-green-700 md:bg-blue-700">
    <h1 class="sm:text-2xl md:text-3xl font-bold mt-10 ">Ejemplo de Tailwind CSS</h1>
    <div class="border shadow-lg p-6 mx-auto mt-10 bg-gray-800 rounded-lg grid sm:grid-cols-3 md:grid-cols-4 gap-2"> <!-- O simplemente flex/max-w-md-->
        <div class="border">
            <h1 class="font-bold">Articulo 1</h1>
            <p class="text-sm sm:text-base lg:text-lg sm:bg-gray-900">Este es un ejemplo de Tailwind CSS</p>
        </div>
        <div class="border">
            <h1 class="font-bold">Articulo 2</h1>
            <p class="text-sm sm:text-base lg:text-lg sm:bg-yellow-900">Este es un ejemplo de Tailwind CSS</p>
        </div>
        <div class="border">
            <h1 class="font-bold">Articulo 3</h1>
            <p class="text-sm sm:text-base lg:text-lg sm:bg-green-900">Este es un ejemplo de Tailwind CSS</p>
        </div>
        <div class="border">
            <h1 class="font-bold">Articulo 4</h1>
            <p class="text-sm sm:text-base lg:text-lg sm:bg-blue-900">Este es un ejemplo de Tailwind CSS</p>
        </div>
    </div>    
</body>
</html>