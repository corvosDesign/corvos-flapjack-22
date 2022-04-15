<div class="mb-4">
    {{-- Do your work, then step back. --}}
    <div x-data="{userEditForm:@entangle("formOpen")}">
       <select class="text-blueline font-light mt-0  w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" wire:model="uid" wire:change="uidChange">
       <option value=false > edit user information</option>
        @foreach($usersList as $list)
        <option value="{{$list->id}}">{{$list->name}}</option>
        @endforeach
       </select>

    <div id="form-visibility-wrap" x-show="userEditForm">
        <form wire:submit.prevent="saveUser" >

        <div class="grid grid-cols-2 gap-4 mb-6">

        <div class="row-start-1 col-span-2 mt-3">
        @error('name'){{$message}}@enderror
        <input wire:model="name" type="text" class="text-blueline font-extralight mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline"/>
        </div>

        <div class="col-span-full">
        @error('email'){{$message}}@enderror

        <input wire:model='email' class="text-blueline font-extralight mt-0 w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline"  type="text"  />
         </div>
         <div class="col-span-full">
            @error('password'){{$message}}@enderror
         <input wire:model='password' class="text-blueline font-extralight mt-0 w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline"  type="password" placeholder="new password"  />
          </div>
          <div class="col-span-full">
             @error('password_confirmation'){{$message}}@enderror

           <input wire:model="password_confirmation" class="text-blueline font-extralight mt-0 w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline"  type="password" placeholder="confirm new password" />
            </div>
        <div class="col-start-1">
        <button class=" text-blueline shadow-md border border-site-gray font-light p-1 rounded w-28" type="submit" x-on:click="userEdit=false">save</button>
        </div>

        <div class="col-start-2">

      <x-close-reset-button></x-close-reset-button>

        </div>
        </div>
    </form>

    </div>
   <div> {{ session('message') }}</div>
    </div>

</div>
