<x-app-layout>
<x-slot name="header">
    <h2 class=" text-xl text-blueline font-normal leading-tight">
        {{ __('client details') }}
    </h2>

</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
        <!--Main grid opening-->
            <div class='grid gap-3'>


                     <x-client-info :company='$client'></x-client-info>

                     <div class="col-span-full place-self-start py-4  border-b border-blueline w-full">
                         <h4 class="text-blueline font-medium text-md ">client contacts</h4>
                     </div>

                     <x-project-contact :users='$client->user'></x-project-contact>

               <div class="col-span-full place-self-start py-4 mt-2 border-b border-blueline w-full">
                    <h4 class="text-blueline font-medium text-md ">projects</h4>
               </div>
                    @foreach($client->projects as $project)
                    <x-project-info :project='$project'></x-project-info>
                    @endforeach
            </div>
        <!--Main grid closed-->
            </div>
        </div>
    </div>
</div>
</x-app-layout>
