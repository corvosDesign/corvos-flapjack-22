<div>


<div class="col-span-4 min-h-10 ">
@if (session()->has('message')) <span class="font-light text-blueline">{{ session('message') }}</span>@endif
@error('photocategory') <span class="text-red-600">{{ $message }}</span> @enderror
@error('photo') <span class="text-red-600">{{ $message }}</span> @enderror
</div>

<div class=" pb-10">
<form wire:submit.prevent="save">
@csrf
<div class="grid md:grid-cols-2 place-items-center">
<div class="col-start-1 w-40 overflow-hidden mr-3 mt-7 mb-7">

@if ($photo)
    <img src="{{ $photo->temporaryUrl() }}"/>
@else
    <img src="{{asset('images/placeholder.svg')}}"/>
@endif

</div>
<div class=" grid h-full place-content-evenly">
<div class="">
<input class="text-gray-50 bg-blueline rounded pr-2 font-light text-sm" type="file" wire:model="photo"/>
    <p class="text-blueline  text-sm font-light">10M max</p>

</div>
<div class="py-4">
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

<div class="">
<button class="font-light w-20 text-sm bg-blueline hover:border-2 shadow focus:bg-blue-500 active:bg-blue-500 rounded p-2 text-gray-50" type="submit">save </button>
</div>
</div>
</div>
</form>
</div>
</div>
