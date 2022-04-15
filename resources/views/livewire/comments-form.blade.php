<div>
    {{-- In work, do what you enjoy. --}}
    <h3 class="ml-3 mb-3 text-blueline font-light text-lg">comment:</h3>
    <form wire:submit.prevent="saveComment" >
    <textarea wire:model="newComment" class='mt-0 block w-full px-0.5 border-0 border-t border-b-2 border-blueline focus:ring-0 focus:border-black' rows="5"></textarea>
    <button class="font-extralight text-blueline shadow-md p-2 mt-3 text-text-sm rounded border border-gray-100" type="submit">add comment</button>
    </form>
</div>
