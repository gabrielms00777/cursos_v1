<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Sistema de Cursos EAD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <nav class="p-4 text-white bg-blue-600">
        <div class="container flex items-center justify-between mx-auto">
            <div>
                <h1 class="text-3xl font-bold">Bem-vindo ao Sistema de Cursos EAD</h1>
                <p class="mt-2">Aprenda, Cresça, Conquiste.</p>
            </div>
            <div>
                <a href="/login" class="text-white">Login</a>
            </div>
        </div>
    </nav>


    <div class="container p-4 mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Detalhes do Curso -->
            <div>
                <h2 class="mb-4 text-3xl font-bold">{{ $course->title }}</h2>
                <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}"
                    class="object-cover w-full h-64 mb-4 mr-6 rounded-lg">
                <p class="mb-4 text-gray-700">{{ $course->description }}</p>
                {{-- <p class="mb-4 text-gray-700">Duração: 8 semanas</p> --}}
                {{-- <p class="mb-4 text-gray-700">Nível: Iniciante a Intermediário</p> --}}
                @if (auth()->check() &&
                        auth()->user()->hasCourse($course))
                    <a href="{{ route('course.show', [$course->id, $course->lessons()->first()->id]) }}"
                        class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Acessar</a>
                @elseif (auth()->check())
                    <a href="{{ route('course.store', $course->id) }}"
                        class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Inscrever-se</a>
                    {{-- <form action="{{ route('course.store', $course->id) }}" method="post">
                        @csrf
                        <button
                            class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Inscrever-se</button> --}}
                    </form>
                @else
                    <a href="#"
                        class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Inscrever-se</a>
                @endif
            </div>

            <!-- Conteúdo do Curso -->
            <div>
                <h2 class="mb-4 text-3xl font-bold">Conteúdo do Curso</h2>
                @foreach ($course->lessons()->get() as $lesson)
                    <h3 class="mb-2 text-xl font-bold">{{ $lesson->title }}</h3>
                    <p class="mb-4 text-gray-700">{{ $lesson->content }}</p>
                @endforeach
                {{-- <h3 class="mb-2 text-xl font-bold">Módulo 1: Introdução ao HTML</h3>
                <p class="mb-4 text-gray-700">Aprenda os fundamentos do HTML, a linguagem de marcação essencial para
                    construir websites.</p>

                <h3 class="mb-2 text-xl font-bold">Módulo 2: Estilizando com CSS</h3>
                <p class="mb-4 text-gray-700">Explore técnicas de estilização para tornar seu site atraente e funcional.
                </p>

                <h3 class="mb-2 text-xl font-bold">Módulo 3: Adicionando Interatividade com JavaScript</h3>
                <p class="mb-4 text-gray-700">Aprenda a tornar seu site dinâmico e interativo com JavaScript.</p> --}}
            </div>
        </div>
    </div>

    <footer class="p-4 mt-8 text-white bg-green-500">
        <div class="container mx-auto">
            <p>&copy; 2023 Sistema de Cursos EAD</p>
        </div>
    </footer>
    @if (session()->has('success'))
        <script>
            alert({{ session('success') }})
        </script>
    @endif
</body>

</html>
