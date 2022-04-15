<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}


    <x-getimages-nav/>
<div>
    @foreach($model as $still)
    <div class='grid grid-col-2 md:grid-cols-5 row-2 md:row-1 place-content-evenly items-center odd:bg-gray-50'>
    <div class="col-start-1 p-3 w-28"><img src="{{asset('storage/stills/'.$still->category .'/'.$still->filename)}}"/></div>
    <div class=" col-start-2  p-3  ">
    @livewire('change-category',['model'=>$still],key('ca'.$still->id))
    </div>
    <div class="col-start-2 row-start-2 md:row-start-1 md:col-start-3 p-3 ">
    @livewire('placement',['model' => $still],key('pl'.$still->id))
    </div>
    <div class='col-start-1 md:col-start-4 p-3 '>
    @livewire('toggle',['model'=>$still,"field"=>'visable'],key('tg'.$still->id))
    </div>
    <div class="col-start-1 md:col-start-5">
    @livewire('delete-model',['model'=> $still], key('del'.$still->id))
    </div>
    <div class='col-start-1 md:col-start-4 p-3 '>

    </div>
    </div>
    @endforeach
</div>

</div>
