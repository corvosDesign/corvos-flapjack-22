<div class="grid grid-cols-4 w-full gap-2">
@foreach($proofs as $proof)
<div class="col-span-1">
<div class="grid grid-cols-2">
    <div class="col-span-full ">
        <a href="{{route('proof.show',['proof'=> $proof->id ] )}}" ><img src="{{ asset('storage/'.$path.$proof->filename) }}"> </a>
    </div>
    <div class="col-span-full col-start-1 md:col-span-1">
    <p class="hidden lg:block text-md font-light text-gray-600">{{$proof->filename}}</p>
    </div>
    <div class="col-span-full md:col-start-2 md:col-span-1">
    @if($proof->approved)
     <p class="text-md font-light text-green-600">approved</p>
    @else
     <p><!-- left blank --></p>
    @endif
    </div>
</div>
<x-comment-list :comments="$proof->comments"></x-comment-list>

</div>
@endforeach
</div>
