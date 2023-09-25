<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Adicionar Novo Curso') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg">
                <!-- Detalhes do Curso e Inscritos -->
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h2 class="mb-4 text-3xl font-bold">Detalhes do Curso</h2>

                        <form>
                            <!-- Campos do Curso -->
                            <div class="mb-4">
                                <x-input label="Título:" placeholder="Nome do curso" />
                            </div>
                            <div class="mb-4">
                                <x-textarea label="Descrição" placeholder="Digite a descrição do curso" />
                            </div>
                            <div class="mb-4">
                                <x-button primary label="Salvar" />
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
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="mb-2 text-xl font-bold">Aula #10</h3>
                                    <h3 class="mb-2 ">Título da aula</h3>
                                    <p class="mb-4 text-white">Conteúdo da aula aqui.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Botão para Adicionar Nova Aula -->
                        <div class="mt-6">
                            <x-button positive label="Adicionar aula" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
