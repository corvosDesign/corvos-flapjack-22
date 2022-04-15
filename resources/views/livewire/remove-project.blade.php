
    {{-- Success is as dangerous as failure. --}}
<div class="grid grid-cols-2">
<div class="col-start-1 col-span-2">
<select class="text-blueline font-light mt-0  w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" wire:model="deleteProjectId" wire:change="projectOnTheChoppingBlock">
   <option value=false > remove project </option>
    @foreach($projects as $aProject)
    <option value="{{$aProject->id}}">{{$aProject->project_title}}</option>
    @endforeach
   </select>
</div>
<div class="col-span-2 grid mt-4">
 @if($projectRIP !== null)
<livewire:delete-model :model="$projectRIP" ></livewire:delete-model>
<div class="col-start-2">

    <x-close-reset-button></x-close-reset-button>

</div>
@endif

</div>
{{ session('message') }}

</div>

