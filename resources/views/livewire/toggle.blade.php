
<div class="mb-3">
<div class="relative inline-block w-10 mr-2 align-middle select-none">
    <input wire:model="tgl" type="checkbox" name="toggle" id="Blue" class="checked:bg-blue-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
        <label for="Blue" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
        </label>
    </div>

    @switch($field)
        @case('visable')
           @if($model->visable)<span class="text-blueline font-normal">visible</span>
           @else <span class="text-gray-200 font-normal">hidden</span>
           @endif
        @break
        @case('open')
            @if($model->open)<span class="text-blueline font-normal">open</span>
               @else <span class="text-gray-200 font-normal">closed</span>
               @endif
            @break
        @case('approved')
        @if($model->approved)<span class="text-blueline font-normal">approved {{$model->updated_at->toFormattedDateString()}}</span>
           @else <span class="text-gray-200 font-normal">not approved</span>
           @endif
        @break

        @default

    @endswitch

</div>
