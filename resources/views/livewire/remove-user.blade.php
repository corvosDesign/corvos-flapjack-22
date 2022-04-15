<div class="grid grid-cols-2">
<div class="col-start-1 col-span-2">
<select class="text-blueline font-light mt-0  w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" wire:model="deleteId" wire:change="onTheChoppingBlock">
   <option value=false > remove user </option>
    @foreach($users as $list)
    <option value="{{$list->id}}">{{$list->name}}</option>
    @endforeach
   </select>
</div>
<div class="col-span-2 grid mt-4">
 @if($userRIP)
<livewire:delete-model :model="$userRIP" ></livewire:delete-model>
<div class="col-start-2">

    <x-close-reset-button></x-close-reset-button>

</div>
@endif
</div>
@if (session()->has('message'))
<div class="col-span-full">
{{ session('message') }}
</div>
@endif
</div>
