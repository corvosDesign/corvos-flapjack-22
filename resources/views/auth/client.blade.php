@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="{{asset('css/app.css')}}"/>

@endpush

@section('title', 'corvos.design photography backend')

@section('content')
<div class="min-h-screen bg-gray-100">
    @include('layouts.client-navigation')

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class=" text-xl text-blueline font-normal leading-tight">
                {{ __('welcome ' . $projects->first()->client->name)}}
            </h2>

        </div>
    </header>

    <!-- Page Content -->
    <main>
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

               <div class='grid gap-3'>

               <div class="col-span-full place-self-start pb-2  border-b border-blueline w-full">
                   <h4 class="text-blueline font-medium text-md ">projects</h4>
               </div>
               <div class="grid grid-cols-3 w-full gap-2">
               <div class="col-start-1 row-start-1"><h5 class="text-sm font-light">title</h5></div>
               <div class="col-start-2 row-start-1"><h5 class="text-sm font-light">start</h5></div>
               <div class="col-start-3 row-start-1"><h5 class="text-sm font-light">end</h5></div>


            @foreach($projects as $project)
                @if($project->open)
           <div class="col-start-1 text-blueline">
               <a href='{{route('project.show',['project'=> $project->id ] )}}'><p class="">{{$project->project_title}}</p></a>
           </div>
           <div class="col-start-2 text-blueline">
               <p class="">{{$project->project_start}}</p>
           </div>
           <div class="col-start-3 text-blueline">
               <div class="">@if($project->project_end !== null)<p class="">{{$project->project_end}}</p>@else<p class=""> &mdash;</p> @endif </div>
           </div>
                @else
                    <div class="col-start-1 text-gray-300">
                       <p class="">{{$project->project_title}}</p>
                   </div>
                   <div class="col-start-2 text-gray-300">
                       <p class="">{{$project->project_start}}</p>
                   </div>
                   <div class="col-start-3 text-gray-300">
                       <div class="">@if($project->project_end !== null)<p class="">{{$project->project_end}}</p>@else<p class=""> &mdash;</p> @endif </div>
                   </div>


                @endif
                @endforeach

           </div>


                </div>


                </div>
            </div>
        </div>
    </div>
    </main>
</div>
@endsection
@push('scripts')
<script src="{{ asset('js/app.js') }}" defer></script>
@endpush
