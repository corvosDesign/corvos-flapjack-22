@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-blueline shadow-sm border-site-gray border-t-0 border-b-2 border-l-0 border-r-0 focus:border-0 ']) !!}>
