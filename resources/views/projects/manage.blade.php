<x-app-layout>
<x-slot name="header">
    <h2 class=" text-xl text-blueline font-normal leading-tight">
        {{ __('manage details') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
        <!--Main grid opening-->
        <div class='grid  md:grid-cols-3 gap-3'>
        <div class="row-auto md:row-span-full md:col-start-1 w-24 overflow-hidden mr-3 mt-7 mb-7">
         <x-logo-svg></x-logo-svg>
         </div>
  <div class=" row-auto md:row-span-full md:col-start-2 md:col-span-2 sm:pl-4">

<livewire:edit-client></livewire:edit-client>
<livewire:edit-project></livewire:edit-project>
<livewire:edit-user></livewire:edit-user>
<livewire:add-user-to-client></livewire:add-user-to-client>
<livewire:remove-user></livewire:remove-user>
<livewire:remove-project></livewire:remove-project>
  </div>


            </div>
        </div>
    </div>
</div>
</x-app-layout>
