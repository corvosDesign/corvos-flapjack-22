<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<div x-data="{ visible : @entangle('isVisible') }">
    <div x-show="visible">
<form wire:submit.prevent="submitProject" >
    <div class="grid grid-cols-2 gap-4 mb-6">
    <div class="row-start-1 col-span-2">
    <input wire:model="project_name" type="text" class="text-blueline font-extralight mt-5 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" placeholder="project name"  />
    @error('project_name') <span class="error">{{ $message }}</span> @enderror
    </div>
<div class="col-start-1">
        <button class="text-blueline shadow-md border border-site-gray font-light p-1 rounded w-28" type="submit">add project</button>
    </div>
    <div class='col-start-2'>
        <x-close-reset-button />
    </div>
    </div>
    </form>
    </div>
</div>
@if($newProject !== null)
<x-project-info :project="$newProject"></x-project-info>
@endif
</div>
