<div class="grid gap-1 text-blueline mt-4 mb-4 h-40 overflow-scroll">
@foreach($comments as $comment)
<p class="text-sm font-light col-span-full">{{$comment->comment}}</p>
@endforeach
</div>
