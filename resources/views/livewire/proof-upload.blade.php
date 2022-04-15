<div>
    {{-- The whole world belongs to you. --}}
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
            <form wire:submit.prevent="save">
                @csrf

                <div class="grid grid-cols-3 gap-4 items-center mb-4">

                <div class="col-start-1">
                    <input type="file" wire:model="photos" multiple class="text-gray-50 bg-blueline rounded p-2 font-light text-sm">
                </div>
                <div class="col-start-3">
                <button type="submit" class="font-light text-sm  hover:border-2 shadow focus:bg-blue-500 active:bg-blue-500 rounded p-2 text-blueline">Save Photo</button>
                </div>
                <div class="col-span-full place-self-center">
                <div wire:loading wire:target="photos" class="text-sm italic text-gray-500">Uploading...</div>
                @error('photos.*') <span class="text-sm italic text-red-500">{{ $message }}</span>@enderror

                </div>
                </div>
            </form>
        @if($proofs !== null)
        <x-proofs-list :proofs="$proofs" :path="$path">
        </x-proofs-list>
        @endif
</div>

<div>
    {{-- In work, do what you enjoy. --}}
</div>
