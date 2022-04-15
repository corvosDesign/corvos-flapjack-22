<div class="grid grid-cols-3 w-full lowercase text-blueline gap-2">

@foreach($users as $user)
<div class="col-start-1">
    <p class="text-md font-light">{{$user->name}}</p>
</div>
<div class="col-start-2">
    <p class="text-md font-light"><a href="mailto:{{$user->email}}">{{$user->email}}</a></p>
</div>
<div class="col-start-3">
    <p class=""><!--left blank --></p>
</div>
@endforeach
</div>
