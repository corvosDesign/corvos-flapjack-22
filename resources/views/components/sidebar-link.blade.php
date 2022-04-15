@props(['active'])

@php
$classes = ($active ?? false)
? ' text-company-main tracking-wide group-hover:text-site-white'
: ' text-site-black font-light tracking-wide group-hover:text-site-white';
@endphp







 <a {{ $attributes->merge(['class' => $classes]) }} >
  {{ $slot }}
 </a>


