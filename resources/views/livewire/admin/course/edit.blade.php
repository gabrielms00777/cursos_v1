<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Adicionar Novo Curso') }}
        </h2>
    </x-slot>

    <div class="py-12 text-white">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg">
                <!-- Detalhes do Curso e Inscritos -->
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h2 class="mb-4 text-3xl font-bold">Detalhes do Curso</h2>

                        <form wire:submit='save'>
                            <!-- Campos do Curso -->
                            <div class="mb-4">
                                @if ($course->image)
                                    <img class="my-2"
                                        src="{{ asset('storage/' . $image) ? asset('storage/' . $image) : $image->temporaryUrl() }}">
                                @endif
                                @if ($image)
                                    <img class="my-2" src="{{ $image->temporaryUrl() }}">
                                @endif
                                {{-- @if ($image->temporaryUrl())
                                    <img class="my-2" src="{{ $image->temporaryUrl() }}">
                                    @else
                                    <img class="my-2" src="{{ asset('storage/' . $image) }}">
                                    @endif --}}
                                <label for="image">Foto</label>
                                <input type="file" wire:model='image' id="image">

                                @error('image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <x-input label="Título:" wire:model='title' placeholder="Nome do curso" />
                            </div>
                            <div class="mb-4">
                                <x-textarea label="Descrição" wire:model='description'
                                    placeholder="Digite a descrição do curso" />
                            </div>
                            <div class="mb-4">
                                <x-button primary label="Salvar Mudanças" type='submit' />
                            </div>
                        </form>

                        <!-- Lista de Inscritos -->
                        <h2 class="mb-4 text-3xl font-bold">Inscritos no Curso</h2>
                        <div class="flex items-center mb-4">
                            <i class="mr-2 text-2xl far fa-users"></i>
                            <p class="font-bold">Total: <span id="totalInscritos">{{ $course->users()->count() }}</span>
                            </p>
                        </div>
                        <ul id="listaInscritos" class="pl-6 list-disc">
                            @forelse ($course->users()->get(['name']) as $user)
                                <li class="mb-2"><i class="mr-2 text-blue-500 fas fa-user">{{ $user->name }}</i>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>

                    <!-- Lista de Aulas -->
                    <livewire:admin.course.lesson :$course>
                </div>

            </div>
        </div>
    </div>
</div>
