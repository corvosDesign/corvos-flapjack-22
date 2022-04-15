<div>
    {{-- In work, do what you enjoy. --}}
    <x-project-contact :users=$users></x-project-contact>
    <div x-data="{ visible : @entangle('newUser') }">
       <div x-show ="!visible">
        <div class="grid grid-cols-2 lowercase text-blueline gap-2 mt-3">
           <div class="col-start-1">
           <h3>project added:</h3>
           </div>

            <div class="col-start-2">
               <button class="font-extralight text-blueline shadow-md p-2 mt-3 text-text-sm rounded border border-gray-100" wire:click="$set('newUser', true)">new project contact</button>
            </div>
            <div class="col-start-3">
               <a href="/dashboard"><button class="font-extralight text-blueline shadow-md p-2 mt-3 text-text-sm rounded border border-gray-100">finish</button>   </a>
                </div>

        </div>
       </div>
       <div x-show="visible">
      <x-add-user-form :company="$company"></x-add-user-form>

       </div>
    </div><!-- close x-data -->
</div> <!-- close component-->

