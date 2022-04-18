<div>
    {{-- The whole world belongs to you. --}}
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
            <form wire:submit.prevent="save">
                @csrf

                <div class="grid grid-cols-3 gap-4 items-center mb-4"



                    x-data="{ isUploading: false, progress: 0 }"

                    x-on:livewire-upload-start="isUploading = true"

                    x-on:livewire-upload-finish="isUploading = false"

                    x-on:livewire-upload-error="isUploading = false"

                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                    >

                <div class="col-start-1">



                    <!-- File Input -->

                       <input type="file" wire:model="photos" multiple class="text-gray-50 bg-blueline rounded p-2 font-light text-sm">


                    <!-- Progress Bar -->

                    <div x-show="isUploading">

                        <progress max="100" x-bind:value="progress"></progress>

                    </div>

                </div>




                <div class="col-start-3">
                        <button x-bind:disabled="isUploading" type="submit" class="font-light text-sm  hover:border-2 shadow focus:bg-blue-500 active:bg-blue-500 rounded p-2 text-blueline disabled:text-site-white disabled:bg-site-gray">Save Photo</button>
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
