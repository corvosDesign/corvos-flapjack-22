<div class="grid grid-cols-3 w-full gap-2 text-blueline">
    <div class="col-start-1 row-start-1"><h5 class="text-sm font-light">title</h5></div>
    <div class="col-start-2 row-start-1"><h5 class="text-sm font-light">start</h5></div>
    <div class="col-start-3 row-start-1"><h5 class="text-sm font-light">end</h5></div>



<div class="col-start-1 text-blueline">
<a href="{{route('project.show', $project)}}">
    <p class="">{{$project->project_title}}</p>
</a>
</div>
<div class="col-start-2 text-blueline">
    <p class="">{{$project->project_start}}</p>
</div>
<div class="col-start-3 text-blueline">
    <div class="">@if($project->project_end !== null)<p class="">{{$project->project_end}}</p>@else<p class=""> &mdash;</p> @endif </div>
</div>

</div>
