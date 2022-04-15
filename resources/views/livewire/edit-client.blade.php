<div class="mb-4">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div x-data="{companyEdit: @entangle("showForm")}">
        <select class="text-blueline font-light mt-0  w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" wire:model="cid" wire:change="cidUpdate" x-on:change="companyEdit=true">
        <option value=0>edit client</option>
        @foreach($companies as $co)
        <option value="{{$co->id}}">{{$co->name}}</option>
        @endforeach
        </select>
        <div id="form-visibility-wrap" x-show="companyEdit">
          <form wire:submit.prevent="save">

             <div class="grid grid-cols-2 gap-4 mb-6">

             <div class="row-start-1 col-span-2 mt-3">

    <input wire:model="client.name" type="text" class="text-blueline font-extralight mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline"/>
    </div>

    <div class="col-span-full">
    <input wire:model='client.address_line1' class="text-blueline font-extralight mt-0 w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline"  type="text"  />
     </div>

    <div class="col-start-1">
    <input wire:model="client.phone" class="text-blueline font-extralight mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" type="tel" />

    </div>
    <div class="col-start-2">
    <input wire:model="client.extension" class="text-blueline font-extralight mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" type="text" />
    </div>
    <div class="col-start-1">
    <button class="text-blueline shadow-md border border-site-gray font-light p-1 rounded w-28" type="submit" x-on:click="companyEdit=false">save</button>
    </div>
    <div class="col-start-2">

    <x-close-reset-button></x-close-reset-button>

    </div>
             </div>
</form>

</div>
<div>
{{ session('message') }}

</div>
</div>
</div>
