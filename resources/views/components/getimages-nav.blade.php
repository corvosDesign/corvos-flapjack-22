<div x-data="{
  highlighted : 0,
  activeClasses : 'px-1 pt-1 border-b-2 border-blue-400 text-sm font-normal leading-5 text-gray-800 focus:outline-none focus:border-blue-400 transition duration-150 ease-in-out',
  inactiveClasses : 'px-1 pt-1 border-b-2 border-transparent text-sm font-light leading-5 text-blueline hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'
}" >

<div class="grid grid-flow-col gap-8 grid-rows-2 md-grid-rows-1 md:p-3 md:pb-5 place-items-center border-b border-blueline mb-5">
    <button @click="highlighted = 1" class="md:col-start-1" wire:click="ImgType('aerial')">
        @livewire('stills-count', ['type' => 'aerial'])
        <h2  :class="highlighted === 1 ? activeClasses : inactiveClasses">aerial</h2>
    </button>

    <button @click="highlighted = 2" class="md:col-start-2" wire:click="ImgType('portrait')">
        @livewire('stills-count', ['type' => 'portrait'])
        <h2  :class="highlighted === 2 ? activeClasses : inactiveClasses">portrait</h2>
    </button>

    <button @click="highlighted = 3" class="md:col-start-3" wire:click="ImgType('architectureC')">
        @livewire('stills-count', ['type' => 'architectureC'])
        <h2 :class="highlighted === 3 ? activeClasses : inactiveClasses">commercial architecture</h2>
    </button>

    <button @click="highlighted = 4" class="md:col-start-4" wire:click="ImgType('architectureR')">
        @livewire('stills-count', ['type' => 'architectureR'])
        <h2 :class="highlighted === 4 ? activeClasses : inactiveClasses">residential architecture</h2>
    </button>

    <button @click="highlighted = 5" class="md:col-start-5" wire:click="ImgType('artists')">
        @livewire('stills-count', ['type' => 'artists'])
        <h2 :class="highlighted === 5? activeClasses : inactiveClasses">artists</h2>
    </button>

    <button @click="highlighted = 6" class="md:col-start-6" wire:click="ImgType('cuisine')">
        @livewire('stills-count', ['type' => 'cuisine'])
        <h2 :class="highlighted === 6 ? activeClasses : inactiveClasses">cuisine</h2>
    </button>

    <button @click="highlighted = 7" class="md:col-start-7" wire:click="ImgType('events')">
        @livewire('stills-count', ['type' => 'events'])
        <h2 :class="highlighted === 7 ? activeClasses : inactiveClasses">events</h2>
    </button>
</div>
</div>
