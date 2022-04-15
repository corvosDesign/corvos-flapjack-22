<div>
    {{-- Stop trying to control. --}}
<div class="grid grids-col-4 text-md font-normal border-b border-blueline mb-4 place-content-evenly p-4 pb-6 ">

<h3 wire:click="currentProjects"  class="col-start-1 cursor-pointer hover:text-gray-600">current projects</h3>
<h3 wire:click="closedProjects" class="col-start-2 cursor-pointer hover:text-gray-600">closed projects</h3>
<h3 wire:click="allProjects" class="col-start-3 cursor-pointer hover:text-gray-600">all projects</h3>

</div>
<div class="grid grids-col-4 place-content-evenly text-blueline ">
  @foreach($projects as $project)
  <div class="col-start-1"><a href="{{route('project.show',['project'=> $project->id ] )}}" >{{$project->project_title}}</a></div>
  <div class="col-start-2">{{$project->project_start}}</div>
  <div class="col-start-3">@if($project->project_end){{$project->project_end}} @else — @endif</div>
  <div class="col-start-4">
  @livewire('toggle',['model'=>$project, "field"=>'open'],key('tg'.$project->id))
    </div>
@endforeach
</div>
</div>

