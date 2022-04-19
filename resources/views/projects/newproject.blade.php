
<x-app-layout>
<x-slot name="header">
   <a href=""{{route('project.create')}}" <h2 class=" text-xl text-site-black font-normal leading-tight">
        {{ __('new project') }}
    </h2>
    </a>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <!-- opening grid  *********************************-->
                <div class='grid grid-cols-3 gap-3'>
                    <div class="row-span-full col-start-1 sm:w-24 overflow-hidden mr-3 mt-7 mb-7">
                       <x-logo-svg></x-logo-svg>
                    </div>
                <div class="col-start-2 col-span-2">

                @livewire('client-search')

                </div>
                </div>



            </div>
        </div>
    </div>
</div>
</x-app-layout>
