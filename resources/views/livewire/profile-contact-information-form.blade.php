<x-jet-form-section submit="action">
    <x-slot name="title">
        {{ __('Testimoni') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Tuliskan ulasan mengenai POLNEP') }}
    </x-slot>

    <x-slot name="form" >

        <!-- message -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="message" value="{{ __('Ulasan') }}" />
            <textarea  id="message" cols="30" rows="10" type="text" class="mt-1 block w-full" wire:model.defer="state.message" autocomplete="name" maxlength="700" placeholder="Silahkan isi testimony"autofocus></textarea>
             @error('state.message') <span class="error text-red-600">{{ $message }}</span> @enderror
            <x-jet-input-error for="message" class="mt-2" />
            <div id="count">
            <span id="current_count">0</span>
            <span id="maximum_count">/ 700</span>
  </div>
  <br>
  <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="pekerjaan" value="{{ __('Pekerjaan') }}" />
            <x-jet-input id="pekerjaan" type="text" class="mt-1 block w-full" wire:model.defer="state.pekerjaan" maxlength="75"/>
            <x-jet-input-error for="pekerjaan" class="mt-2" />
        </div>

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
<script src="http://code.jquery.com/jquery-1.5.js"></script>

<script type="text/javascript">
$('textarea').keyup(function() {    
    var characterCount = $(this).val().length,
        current_count = $('#current_count'),
        maximum_count = $('#maximum_count'),
        count = $('#count');    
        current_count.text(characterCount);        
});
</script>