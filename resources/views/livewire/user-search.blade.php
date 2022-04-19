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
               <button class="text-blueline shadow-md border border-site-gray font-light p-1 rounded w-28" wire:click="$set('newUser', true)">new contact</button>
            </div>
            <div class="col-start-3">
               <a href="/dashboard"><button class="text-blueline shadow-md border border-site-gray font-light p-1 rounded w-28">finish</button>   </a>
                </div>

        </div>
       </div>
       <div x-show="visible">
      <x-add-user-form :company="$company"></x-add-user-form>

       </div>
    </div><!-- close x-data -->
</div> <!-- close component-->

