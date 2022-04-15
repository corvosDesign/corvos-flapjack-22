<div class="mb-4">
<select class="text-blueline font-light mt-0  w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" wire:model="companyID"  wire:change="companyFind">
   <option value=null>add contact for client </option>
    @foreach($companies as $co)
    <option value="{{$co->id}}">{{$co->name}}</option>
    @endforeach
   </select>
  @if($client)
<x-add-user-form :company="$client">

    <x-close-reset-button></x-close-reset-button>

</x-add-user-form>

@endif
</div>
