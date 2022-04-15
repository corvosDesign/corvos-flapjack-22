<div class="mt-6 grid">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
@foreach($comments as $comment)
<div class="text-sm text-blueline font-extralight">{{$comment->created_at->toFormattedDateString()}}</div>
<div>{{$comment->comment}}</div>
<div class="font-extralight text-blueline text-sm ml-6 mb-2">—{{$comment->user->name}}</div>
    @if(Auth::user()->hasAuth)
        <div class="mb-4">
        <livewire:delete-model :model="$comment" :wire:key="$comment->id"></livewire:delete-model>
        </div>
    @endif
@endforeach
</div>
