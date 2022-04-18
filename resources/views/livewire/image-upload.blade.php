<div>


<div class="col-span-4 min-h-10 ">
@if (session()->has('message')) <span class="font-light text-blueline">{{ session('message') }}</span>@endif
@error('photocategory') <span class="text-red-600">{{ $message }}</span> @enderror
@error('photo') <span class="text-red-600">{{ $message }}</span> @enderror
</div>

<div class=" pb-10">
<form wire:submit.prevent="save">
@csrf
<div class="grid grid-col-2">
<div class="row-span-full col-start-1 w-28 sm:w-40 overflow-hidden mr-3 mt-7 mb-7">

@if ($photo)
    <img src="{{ $photo->temporaryUrl() }}"/>
@else
    <img src="{{asset('images/placeholder.svg')}}"/>
@endif

</div>
<div class="row-span-full col-start-2 grid place-content-evenly sm:pl-4">
<div class="md:col-start-2">
<!-- livewrie input test -->
<div

    x-data="{ isUploading: false, progress: 0 }"

    x-on:livewire-upload-start="isUploading = true"

    x-on:livewire-upload-finish="isUploading = false"

    x-on:livewire-upload-error="isUploading = false"

    x-on:livewire-upload-progress="progress = $event.detail.progress"

>

    <!-- File Input -->

<input class="text-gray-50 bg-blueline rounded pr-2 font-light text-sm" type="file" wire:model="photo"/>


    <!-- Progress Bar -->

    <div x-show="isUploading">

        <progress max="100" x-bind:value="progress"></progress>

    </div>

</div>






</div>
<div class="  md:col-start-3">
<select wire:model="photocategory" class="text-blueline font-light w-60">
<option>aerial</option>
<option>portrait</option>
<option value="architectureC">commercial architecture</option>
<option value="architectureR">residential architecture</option>
<option>artists</option>
<option>cuisine</option>
<option>events</option>
</select>
</div>

<div class="md:col-start-4">
<button class="font-light w-20 text-sm bg-blueline hover:border-2 shadow focus:bg-blue-500 active:bg-blue-500 rounded p-2 text-gray-50" type="submit">save </button>
</div>
</div>
</div>
</form>
</div>
</div>
