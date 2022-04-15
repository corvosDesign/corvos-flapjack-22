

<div x-data="{show:false}">
<div @click="show=!show" class="z-50 absolute w-48 bg-opacity-0 flex justify-start mt-3 mx-0 cursor-pointer">

<template x-if="show==false">
<image class="ml-3 w-7" src="{{asset('images/lines.svg')}}"></image>
</template>
<template x-if="show==true">
<div class="w-full pb-4 text-center font-extralight text-site-black text-sm cursor-pointer tracking-wider">close</div>
</template>


</div>

<div x-show="show"
     x-transition.duration.1000ms.origin.left
     class=" h-screen z-40 absolute w-48 bg-site-gray md:opacity-90 ">
    <div class="flex bg-transparent justify-center mt-20">
    <nav class="w-full">
      <ul class="w-full">
      <li>
         <div class="mt-10 flex justify-center">
          <a href="{{route('corvos')}}"><img class="w-16 filter invert" src="{{asset('images/glasslogoAsset.png')}}" alt="corvos.design logo icon"/></a>
         </div>
      </li>


      <li class="group mt-10">
        <div class="text-center p-2 group-hover:bg-site-white group-hover:bg-opacity-50 ">
          <x-sidebar-link  :href="route('corvos')" :active="request()->routeIs('corvos')" > {{__('welcome')}} </x-sidebar-link>
        </div>
        </li>

      <li class="group mt-5">
      <div class=" text-center p-2 group-hover:bg-site-white group-hover:bg-opacity-50  ">
      <x-sidebar-link   :href="route('login')" :active="request()->routeIs('login')">{{__('admin panel example')}}</x-sidebar-link>
      </div>
     </li>

     <li class="group mt-5">
         <div class=" text-center p-2 group-hover:bg-site-white group-hover:bg-opacity-50 ">
         <x-sidebar-link :href="route('background')" :active="request()->routeIs('background')" > {{ __('animated background svg') }} </x-sidebar-link>
         </div>
       </li>



      </ul>
    </nav>
    </div>
</div>
</div>
