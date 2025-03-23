<div class="col-4 mb-4">
    <label for="name">Name:</label>
    <x-input id="name" class="block mt-1 w-full" type="text" wire:model.live="name"
             autofocus/>
    @error('name')
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>
<div class="col-4 mb-4">
    <label for="email">Email:</label>
    <x-input id="email" class="block mt-1 w-full" type="text" wire:model.live="email"
    />
    @error('email')
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>
<div class="col-4 mb-4">
    <label for="mobile">Mobile:</label>
    <x-input id="mobile" class="block mt-1 w-full" type="text" wire:model.live="mobile"
    />
    @error('mobile')
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>
<div class="col-4 mb-4">
    <label for="south_african_id">South African Id:</label>
    <x-input id="south_african_id" class="block mt-1 w-full" type="text" wire:model.live="south_african_id"
    />
    @error('south_african_id')
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>
<div class="col-4 mb-4">
    <label for="date_of_birth">Date Of Birth:</label>
    <x-input id="date_of_birth" class="block mt-1 w-full" type="date" wire:model.live="date_of_birth"
    />
    @error('date_of_birth')
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>
<div class="col-4 mb-4">
    <label for="interests">Interests:</label>
    <select id="interests" wire:model.live="interest"
            class="block w-full h-10 px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
        <option value="">Select Interest</option>
        @foreach($interests as $interest)
            <option value="{{ $interest->id }}">
                {{ $interest->name }}
            </option>
        @endforeach
    </select>
    @error('interest')
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>
<div class="col-4 mb-4">
    <label for="language">Language:</label>
    <select id="language" wire:model.live="language" multiple
            class="block w-full h-40 px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
        @foreach($languages as $language)
            <option value="{{ $language->id }}">
                {{ $language->name }}
            </option>
        @endforeach
    </select>
    @error('language')
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>