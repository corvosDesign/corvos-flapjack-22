@extends('layouts.master')

@section('title', 'corvos.design — animated svg background')

@push('seo')
<meta name="description" content="freelance web technologist for hire" />
<link rel=”canonical” href=”https://www.corvos.design/background” />
@endpush

@push('css')

@endpush


@section('content')

<div class=" h-screen w-full absolute top-0  bg-gradient-to-t from-company-main to-site-white lg:px-36 z-20">

<svg  xmlns="http://www.w3.org/2000/svg" id="svgBg" class="" version="1.1" width="100%" height="100%">
<defs>
      <radialGradient id="grad1" cx="50%" cy="50%" r="90%" fx="50%" fy="50%">
        <stop offset="0%" style="stop-color:#08468E;stop-opacity:1" />
        <stop offset="10%" style="stop-color:#EBEDF0;stop-opacity:0.8" />
        <stop offset="100%" style="stop-color:#DEAA2F;stop-opacity:1" />
      </radialGradient>
  </defs>
</svg>
</div>
@endsection
@push('scripts')

@endpush
