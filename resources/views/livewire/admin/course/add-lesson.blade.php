<div class="mt-6">
    <x-button positive label="Adicionar aula" wire:click="$toggle('lessonModal')" />

    <x-modal.card title="Adicionar aulas" blur wire:model="lessonModal">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <x-input label="Nome" wire:model='title' placeholder="Título da aula" />
            <x-input label="Ordem" wire:model='order' placeholder="Numero da aula" />

            <div class="col-span-1 sm:col-span-2">
                <x-input label="Link" wire:model='content' placeholder="Link para da aula" />
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
