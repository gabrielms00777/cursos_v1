<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistir ao Curso - Curso de Programação Web</title>
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
        <h2 class="mb-4 text-3xl font-bold">Assistir ao {{ $course->title }}</h2>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <!-- Vídeo incorporado -->
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="mb-2 text-xl font-bold">{{ $lesson->title }}</h3>
                <p class="mb-4 text-gray-700">{{ $lesson->content }}</p>

                <div class="mb-4 aspect-w-16 aspect-h-9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $lesson->link }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <!-- Lista de Aulas -->
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="mb-2 text-xl font-bold">Aulas Disponíveis</h3>
                <ul class="pl-4 mb-4 list-disc">
                    @foreach ($course->lessons()->get() as $lesson)
                        <li class="mb-2">
                            <a href="{{ route('course.show', [$course->id, $lesson->id]) }}"
                                class="text-blue-500">{{ $lesson->title }}</a>
                            {{-- <span class="ml-2">(Assistida)</span> --}}
                            {{-- <button class="px-2 py-1 ml-2 text-white bg-blue-500 rounded-full">Concluir</button> --}}
                        </li>
                    @endforeach
                    {{-- <li>
                        <span class="text-blue-500">Aula 2:</span> <a href="#" class="text-blue-500">Estrutura
                            Básica de um Documento HTML</a>
                        <span class="ml-2">(Não Assistida)</span>
                    </li> --}}
                    <!-- Adicione mais aulas conforme necessário -->
                </ul>

                {{-- <h3 class="mb-2 text-xl font-bold">Recursos Adicionais</h3>
                <ul class="pl-4 mb-4 list-disc">
                    <li><a href="#" class="text-blue-500">Exercício Prático - Criando uma Página Web Simples</a>
                    </li>
                    <li><a href="#" class="text-blue-500">Leitura Complementar: Introdução ao HTML5</a></li>
                </ul> --}}
            </div>
        </div>

        <!-- Seção de Comentários -->
        {{-- <div class="p-6 mt-6 bg-white rounded-lg shadow-lg">
            <h3 class="mb-4 text-xl font-bold">Comentários e Dúvidas</h3>

            <!-- Lista de Comentários Fictícios -->
            <ul class="mb-4">
                <li class="mb-2">
                    <strong>João:</strong> Ótimo curso! Estou aprendendo muito.
                </li>
                <li class="mb-2">
                    <strong>Maria:</strong> Gostaria de mais informações sobre CSS.
                </li>
                <li class="mb-2">
                    <strong>Carlos:</strong> Excelente explicação sobre HTML5.
                </li>
            </ul>

            <!-- Formulário para Novo Comentário -->
            <form>
                <div class="mb-4">
                    <label for="nome" class="block mb-2 font-bold text-gray-700">Nome:</label>
                    <input type="text" id="nome" name="nome"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="comentario" class="block mb-2 font-bold text-gray-700">Comentário ou Dúvida:</label>
                    <textarea id="comentario" name="comentario" class="w-full px-3 py-2 border border-gray-300 rounded-lg" rows="4"
                        required></textarea>
                </div>
                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Enviar
                    Comentário</button>
            </form>
        </div> --}}
    </div>

    <footer class="p-4 mt-8 text-white bg-blue-600">
        <div class="container mx-auto">
            <p>&copy; 2023 Sistema de Cursos EAD</p>
        </div>
    </footer>
</body>

</html>
