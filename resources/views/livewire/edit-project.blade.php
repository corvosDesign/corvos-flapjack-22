<div class="mb-4">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
        <div x-data="{projectEdit: @entangle("projectEditForm")}">
            <select class="text-blueline font-light mt-0  w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" wire:model="projectId" wire:change="projectUpdate" x-on:change="projectEdit=true">
            <option value=0>edit project</option>
            @foreach($projects as $project)
            <option value="{{$project->id}}"><span>{{$project->client->name}} — </span>{{$project->project_title}}</option>
            @endforeach
            </select>
            <div id="form-visibility-wrap" x-show="projectEdit">
             <form wire:submit.prevent="saveProject">

                 <div class="grid grid-cols-2 gap-4 mb-6">

                 <div class="row-start-1 col-span-2 mt-3">

        <input wire:model="project.project_title" type="text" class="text-blueline font-extralight mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline"/>
        </div>


        <div class="col-start-1">
        <button class=" text-blueline shadow-md border border-site-gray font-light p-1 rounded w-28" type="submit" x-on:click="projectEdit=false">save</button>
        </div>
        <div class="col-start-2">

       <x-close-reset-button></x-close-reset-button>

        </div>
                 </div>
    </form>

    </div>
   <div> {{ session('message') }}</div>
    </div>
</div>
