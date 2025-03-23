<div>
    @include('livewire.user-details.forms.user-details-form')

    <div class="text-right mt-4">
        <button wire:click="submit" type="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Save
        </button>
    </div>
</div>