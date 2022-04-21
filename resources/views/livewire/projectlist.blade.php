<div>
    {{-- Stop trying to control. --}}
<div class="grid grid-flow-col gap-4 text-center text-md font-normal border-b border-blueline mb-4 pb-6 ">
<div class="grid rounded bg-site-black p-2 hover:shadow">
<h3 wire:click="currentProjects"  class="text-site-white cursor-pointer hover:text-gray-600">current projects</h3>
</div>
<div class="grid rounded bg-site-black p-2  hover:shadow">
<h3 wire:click="closedProjects" class="text-site-white cursor-pointer hover:text-gray-600">closed projects</h3>
</div>
<div class="grid rounded bg-site-black p-2  hover:shadow">
<h3 wire:click="allProjects" class="text-site-white cursor-pointer hover:text-gray-600">all projects</h3>
</div>
 @if(Auth::user()->hasAuth)
<div class="grid rounded bg-site-black p-2 hover:shadow">
<h3 wire:click="clients" class="text-site-white cursor-pointer hover:text-gray-600">clients</h3>
</div>
@endif
</div>
<div x-data="{open : @entangle('projectOrClient')}">
    <div x-show="open" class="grid grids-col-4 place-content-evenly text-blueline ">
         @foreach($projects as $project)
             <div class="col-start-1"><a href="{{route('project.show',['project'=> $project->id ] )}}">{{$project->project_title}}</a></div>
             <div class="col-start-2">{{$project->project_start}}</div>
             <div class="col-start-3">@if($project->project_end){{$project->project_end}} @else — @endif</div>
             <div class="col-start-4">@livewire('toggle',['model'=>$project, "field"=>'open'],key('tg'.$project->id))</div>
        @endforeach
    </div>
    <div x-show="!open" class="grid grids-col-4 place-content-evenly text-blueline ">
       @foreach($allClients as $allClient)
        <div class="col-start-1 p-3"><a href="{{route('client.show',$allClient)}}">{{$allClient->name}}</a></div>
        <div class="col-start-2 p-3">{{$allClient->address_line1}}</div>
        <div class="col-start-3 p-3">{{$allClient->phone}}@if($allClient->extension)<span> ext </span>{{$allClient->extension}}@endif</div>
       @endforeach
    </div>

</div>
</div>

