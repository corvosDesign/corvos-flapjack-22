<x-app-layout>
<x-slot name="header">
    <h2 class=" text-xl text-blueline font-normal leading-tight">
        {{ __('project details') }}
    </h2>

</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
        <!--Main grid opening-->
        <div class='grid gap-3'>

            <div class="col-span-full place-self-start pb-2  border-b border-blueline w-full">
                <h4 class="text-blueline font-medium text-md ">client</h4>
            </div>

                 <x-client-info :company='$company'></x-client-info>
                 @if(Auth::user()->hasAuth)
                 <x-project-contact :users='$users'></x-project-contact>
                 @endif
           <div class="col-span-full place-self-start pb-2 mt-2 border-b border-blueline w-full">
                <h4 class="text-blueline font-medium text-md ">project</h4>
           </div>
                 <x-project-info :project='$project'></x-project-info>

            <div class="col-span-full place-self-start pb-2 mt-2 border-b border-blueline w-full">
                <h4 class="text-blueline font-medium text-md ">proofs</h4>
            </div>
            @if(Auth::user()->hasAuth)
            <livewire:proof-upload :proofs="$proofs" :project="$project" :path="$path"/>
            @elseif(Auth::user())
            <x-proofs-list :proofs="$proofs" :path="$path" ></x-proofs-list>
            @endif
            </div>
        <!--Main grid closed-->
            </div>
        </div>
    </div>
</div>
</x-app-layout>
