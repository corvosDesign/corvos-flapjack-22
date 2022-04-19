<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
<form wire:submit.prevent="submit" >
    <div class="grid grid-cols-2 gap-4 mb-6">
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <!-- add company form -->
    <div class="row-start-1 col-span-2 mt-3">


    <input wire:model="company_name" type="text" class="text-blueline font-extralight mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" placeholder="client name"/>
    @error('company_name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="col-span-full">
    <input wire:model='company_address' class="text-blueline font-extralight mt-0 w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline"  type="text" placeholder="address"  />
    @error('company_address') <span class="error">{{ $message }}</span> @enderror
     </div>

    <div class="col-start-1">
    <input wire:model="phone" class="text-blueline font-extralight mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" type="tel" placeholder="###-###-####"/>
    @error('phone') <span class="error">{{ $message }}</span> @enderror

    </div>
    <div class="col-start-2">
    <input wire:model="ext" class="text-blueline font-extralight mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" type="text" placeholder="ext"/>
    @error('ext') <span class="error">{{ $message }}</span> @enderror

    </div>
    <div class="col-start-1">
    <button class=" text-blueline shadow-md border border-site-gray font-light p-1 rounded w-28" type="submit">add client</button>
    </div>
    <div class="col-start-2">
    <x-close-reset-button></x-close-reset-button>
    </div>
</form>
</div>


