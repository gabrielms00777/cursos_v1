<div>
    <h2 class="mb-4 text-3xl font-bold">Aulas do Curso</h2>


    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Título da Aula
                </th>
                <th scope="col" class="px-6 py-3">
                    Conteudo da Aula
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Ação</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($course->lessons()->get() as $lesson)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <td class="px-6 py-2 mb-2 text-xl font-bold text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $lesson->title }}
                    </td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ Str::limit($lesson->content, 30) }}
                    </td>
                    <td class="px-6 py-2">
                        <a href="#" class="text-blue-500 hover:text-blue-700">Editar</a>
                    </td>

                </tr>
            @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td colspan="2" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Nenhuma aula disponível.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{-- <div class="my-4">
        {{ $lessons->links() }}
    </div> --}}


    <x-button class="mt-6" positive label="Adicionar aula" wire:click="$toggle('lessonModal')" />

    <x-modal.card title="Adicionar aulas" blur wire:model="lessonModal">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <x-input label="Nome" wire:model='title' placeholder="Título da aula" />
            <x-input label="Link" wire:model='link' placeholder="Link da aula" />

            <div class="col-span-1 sm:col-span-2">
                <x-input label="Conteudo" wire:model='content' placeholder="Conteudo da aula" />
            </div>
        </div>

        <x-slot name="footer">
            <div class="flex justify-between gap-x-4">
                <x-button flat negative label="Delete" wire:click="delete" />

                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="Save" wire:click="save" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>
</div>
