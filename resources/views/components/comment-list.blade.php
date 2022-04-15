<div class="grid gap-1 text-blueline">
@foreach($comments as $comment)
<p class="text-sm font-light col-span-full">{{$comment->comment}}</p>
@endforeach
</div>
