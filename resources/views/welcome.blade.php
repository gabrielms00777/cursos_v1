<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - LearnTube</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <nav class="p-4 text-white bg-blue-600">
        <div class="container flex items-center justify-between mx-auto">
            <div>
                <h1 class="text-3xl font-bold">Bem-vindo ao LearnTube</h1>
                <p class="mt-2">Aprenda, Cresça, Conquiste com Cursos Gratuitos do YouTube.</p>
            </div>
            <div>
                <a href="/login" class="text-white">Login</a>
            </div>
        </div>
    </nav>


    <div class="container p-4 mx-auto mt-8">
        <h2 class="mb-4 text-3xl font-bold">Cursos em Destaque</h2>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Cursos -->
            @foreach ($courses as $course)
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}"
                        class="object-cover w-full h-32 mb-4 rounded">
                    <h3 class="mb-2 text-xl font-bold">{{ $course->title }}</h3>
                    <p class="mb-4 text-gray-700">{{ $course->description }}</p>
                    <a href="{{ route('course', $course->id) }}"
                        class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Inscreva-se</a>
                </div>
            @endforeach

            <!-- Adicione mais cursos aqui conforme necessário -->
        </div>
    </div>

    <footer class="p-4 mt-8 text-white bg-green-500">
        <div class="container mx-auto">
            <p>&copy; 2023 LearnTube - Cursos Gratuitos do YouTube</p>
        </div>
    </footer>
</body>

</html>
