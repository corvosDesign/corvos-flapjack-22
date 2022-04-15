<x-app-layout>
<x-slot name="header">
    <a href="{{ URL::previous() }}"<h2 class=" text-xl text-blueline font-normal leading-tight">
        {{ __('back to project details') }}
    </h2></a>

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
