<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight dark:text-white">
            {{ __('Adicionar Novo Curso') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <!-- Detalhes do Curso e Inscritos -->
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h2 class="mb-4 text-3xl font-bold">Detalhes do Curso</h2>

                        <form>
                            <!-- Campos do Curso -->
                            <div class="mb-4">
                                <label for="titulo" class="block mb-2 font-bold text-gray-700">Título do Curso:</label>
                                <input type="text" id="titulo" name="titulo" class="w-full form-input" required>
                            </div>
                            <div class="mb-4">
                                <label for="inscritos" class="block mb-2 font-bold text-gray-700">Número de
                                    Inscritos:</label>
                                <input type="number" id="inscritos" name="inscritos" class="w-full form-input"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="descricao" class="block mb-2 font-bold text-gray-700">Descrição:</label>
                                <textarea id="descricao" name="descricao" class="w-full form-input" rows="4" required></textarea>
                            </div>
                        </form>

                        <!-- Lista de Inscritos -->
                        <h2 class="mb-4 text-3xl font-bold">Inscritos no Curso</h2>
                        <div class="flex items-center mb-4">
                            <i class="mr-2 text-2xl far fa-users"></i>
                            <p class="font-bold">Total: <span id="totalInscritos">2</span></p>
                        </div>
                        <ul id="listaInscritos" class="pl-6 list-disc">
                            <li class="mb-2"><i class="mr-2 text-blue-500 fas fa-user"></i>Nome do Inscrito 1</li>
                            <li class="mb-2"><i class="mr-2 text-blue-500 fas fa-user"></i>Nome do Inscrito 2</li>
                            <!-- Adicione mais inscritos conforme necessário -->
                        </ul>
                    </div>

                    <!-- Lista de Aulas -->
                    <div>
                        <h2 class="mb-4 text-3xl font-bold">Aulas do Curso</h2>
                        <div id="aulas-container" class="space-y-4">
                            <!-- Nenhuma aula adicionada ainda -->
                        </div>

                        <!-- Botão para Adicionar Nova Aula -->
                        <div class="mt-6">
                            <button type="button" onclick="adicionarAula()"
                                class="px-4 py-2 text-white bg-green-500 rounded-full hover:bg-green-700">Adicionar Nova
                                Aula</button>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="px-4 py-2 text-white bg-blue-500 rounded-full hover:bg-blue-700">Salvar Curso</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
