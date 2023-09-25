<div>
    <x-button primary label="Adicionar Curso" wire:click="$toggle('modal')" />

    <x-modal.card title="Adicionar aulas" blur wire:model="modal">
        <div class="flex flex-col gap-4">
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" alt="">
            @endif
            <label for="image">Foto</label>
            <input type="file" wire:model='image' id="image">

            @error('image')
                <span class="error">{{ $message }}</span>
            @enderror
            <x-input label="Nome" wire:model='title' placeholder="Título da aula" />

            <x-textarea label="Descrição" wire:model='description' placeholder="Link para da aula" />
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
