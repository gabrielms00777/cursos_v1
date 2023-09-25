<div class="container p-4 mx-auto mt-8">
    <h2 class="mb-4 text-3xl font-bold">Meus Cursos</h2>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- Curso 1 -->
        @forelse ($this->courses as $course)
            <div class="p-6 bg-white rounded-lg shadow-lg">
                @if ($course->image)
                    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}"
                        class="object-cover w-full h-32 mb-4 rounded">
                @else
                    <img src="{{ asset('image.jpg') }}" alt="{{ $course->title }}"
                        class="object-cover w-full h-32 mb-4 rounded">
                @endif
                <h3 class="mb-2 text-xl font-bold">{{ $course->title }}</h3>
                <p class="mb-4 text-gray-700">{{ $course->description }}</p>
                <a href="{{ route('course.show', [$course->id, $course->lessons()->first()->id]) }}"
                    class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Acessar</a>
            </div>
        @empty
            <div class="">
                Você ainda não se inscreveu em nanhum curso
            </div>
        @endforelse

        <!-- Adicione mais cursos aqui conforme necessário -->
    </div>
</div>
