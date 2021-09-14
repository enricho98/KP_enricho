<x-jet-form-section submit="updateProfileContactInformation">
    <x-slot name="title">
        {{ __('Social Media') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Perbarui informasi akun Media Sosial Anda.') }}
    </x-slot>

    <x-slot name="form">

        <!-- message -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="facebook" value="{{ __('Facebook') }}" />
            <x-jet-input id="facebook" type="text" class="mt-1 block w-full" wire:model.defer="state.facebook"/>
            <x-jet-input-error for="facebook" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="instagram" value="{{ __('Instagram') }}" />
            <x-jet-input id="instagram" type="text" class="mt-1 block w-full" wire:model.defer="state.instagram"/>
            <x-jet-input-error for="instagram" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Tersimpan') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled">
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>