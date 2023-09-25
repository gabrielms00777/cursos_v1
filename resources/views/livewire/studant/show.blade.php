<div class="container p-4 mx-auto mt-8">
    <h2 class="mb-4 text-3xl font-bold">Assistir ao {{ $course->title }}</h2>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-5">
        <!-- Vídeo incorporado -->
        <div class="col-span-1 p-6 bg-white rounded-lg shadow-lg md:col-span-3 ">
            <h3 class="mb-2 text-xl font-bold">{{ $lesson->title }}</h3>
            <p class="mb-4 text-gray-700">{{ $lesson->content }}</p>

            <div class="mb-4 aspect-video">
                <iframe src="https://www.youtube.com/embed/{{ $lesson->link }}" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="w-full h-full"></iframe>
            </div>
        </div>

        <!-- Lista de Aulas -->
        <div class="col-span-1 p-6 bg-white rounded-lg shadow-lg md:col-span-2">
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
