<x-app-layout>
<x-slot name="header">
   <div class="inline-grid grid-flow-col gap-4 w-full">
       <div>
       <a href="{{route('project.show',['project'=> $proof->projects ] )}}" > <h2 class=" text-xl text-blueline font-normal leading-tight">
           {{ __('back to project details') }}
       </h2></a>
       </div>
   @if($previous)
       <div>
          <a href="{{route('proof.show',['proof'=> $previous ] )}}" >
           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  inline-block" viewBox="0 0 20 20" fill="#36383B">
             <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
           </svg>
           <span class="text-site-black ml-4">previous</span>
             </a>
       </div>
   @endif
   @if($next)
       <div>
       <a href="{{route('proof.show',['proof'=> $next ] )}}" >
       <span class="text-site-black mr-4">next</span>
       <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  inline-block" viewBox="0 0 20 20" fill="#36383B">
         <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
       </svg>
       </a>
       </div>
   @endif

   </div>
</x-slot>

<div class="py-3 md:py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
        <!--Main grid opening-->
        <div class='grid md:grid-cols-3 gap-3'>
        <div class="col-span-full md:col-start-1 md:col-span-2 md:row-start-1 row-span-2">
            <img src="{{ asset('storage/'.$path.$proof->filename) }}" alt="larger image for {{$proof->filename}}">
            @if(Auth::user()->hasAuth)
                <div class="mt-4">@livewire('delete-model',['model'=>$proof])</div>
            @endif
        </div>
        <div class="md:col-start-3">
        <div class="col-span-full mb-4">
        <h2 class="mb-2">Approval:</h2>
        @livewire('toggle',['model'=>$proof, "field"=>'approved'])
        </div>
        <div class="">
            <livewire:comments-form :proof="$proof"></livewire:comments-form>
        </div>
        <div class="">
            <livewire:comments-display :proof="$proof"></livewire:comments-display>
        </div>
        </div>
        <!--Main grid closed-->
            </div>
        </div>
    </div>
</div>
</x-app-layout>
