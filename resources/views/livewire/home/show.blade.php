<div class="container p-4 mx-auto mt-8">
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
        <!-- Detalhes do Curso -->
        <div>
            <h2 class="mb-4 text-3xl font-bold">{{ $course->title }}</h2>
            @if ($course->image)
                <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}"
                    class="object-cover w-full h-32 mb-4 rounded">
            @else
                <img src="{{ asset('image.jpg') }}" alt="{{ $course->title }}"
                    class="object-cover w-full h-32 mb-4 rounded">
            @endif
            <p class="mb-4 text-gray-700">{{ $course->description }}</p>
            {{-- <p class="mb-4 text-gray-700">Duração: 8 semanas</p> --}}
            {{-- <p class="mb-4 text-gray-700">Nível: Iniciante a Intermediário</p> --}}
            @if (auth()->check() &&
                    auth()->user()->hasCourse($course))
                <a href="{{ route('course.show', [$course->id, $course->lessons()->first()->id]) }}"
                    class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Acessar</a>
            @elseif (auth()->check())
                {{-- <a href="{{ route('course.store', $course->id) }}"
                    class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Inscrever-se</a> --}}
                <button wire:click='subscribe'
                    class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Inscrever-se</button>
            @else
                <a href="{{ route('login') }}"
                    class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Inscrever-se</a>
            @endif
        </div>

        <!-- Conteúdo do Curso -->
        <div>
            <h2 class="mb-4 text-3xl font-bold">Conteúdo do Curso</h2>
            @foreach ($this->lessons() as $lesson)
                <h3 class="mb-2 text-xl font-bold">{{ $lesson->title }}</h3>
                <p class="mb-4 text-gray-700">{{ $lesson->content }}</p>
            @endforeach
            @if ($this->lessons()->hasPages())
                <div class="mt-6">
                    {{ $this->lessons()->links() }}
                </div>
            @endif
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
