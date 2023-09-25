<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Inicial - Sistema de Cursos EAD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <nav class="p-4 text-white bg-blue-600">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold">Bem-vindo ao Sistema de Cursos EAD</h1>
            <p class="mt-2">Aprenda, Cresça, Conquiste.</p>
        </div>
    </nav>

    <div class="container p-4 mx-auto mt-8">
        <h2 class="mb-4 text-3xl font-bold">Meus Cursos</h2>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Curso 1 -->
            @foreach ($courses as $course)
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <img src="curso1.jpg" alt="Curso de Programação Web" class="object-cover w-full h-32 mb-4 rounded">
                    <h3 class="mb-2 text-xl font-bold">{{ $course->title }}</h3>
                    <p class="mb-4 text-gray-700">{{ $course->description }}</p>
                    <a href="{{ route('course.show', [$course->id, $course->lessons()->first()->id]) }}"
                        class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Acessar</a>
                </div>
            @endforeach

            <!-- Adicione mais cursos aqui conforme necessário -->
        </div>
    </div>

    <footer class="p-4 mt-8 text-white bg-blue-600">
        <div class="container mx-auto">
            <p>&copy; 2023 Sistema de Cursos EAD</p>
        </div>
    </footer>
</body>

</html>
