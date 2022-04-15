<div>
 <div x-data="{ visible : @entangle('companyVisible') }">
   {{-- In work, do what you enjoy. --}}
<div x-show="visible">
<select class="text-blueline font-light mt-0  w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" wire:model="company_id">
<option>client</option>
<option value="newcompany">New Client</option>
@foreach($companies as $co)
<option value="{{$co->id}}">{{$co->name}}</option>
@endforeach
</select>
</div>
 </div>
@if($company_id == 'newcompany')
    <livewire:add-client-form></livewire:add-client-form>
@elseif($company)
    <x-client-info :company="$company"></x-client-info>
    <livewire:add-project-form :company='$company'></livewire:add-project-form>
@endif
@if($showUser == true)
<livewire:user-search :company='$company'></livewire:user-search>
@endif


</div>
