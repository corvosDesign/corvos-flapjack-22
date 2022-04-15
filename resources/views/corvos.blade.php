@extends('layouts.master')

@section('title', 'corvos.design — welcome')

@push('seo')
<meta name="description" content="freelance web technologist for hire" />
<link rel=”canonical” href=”https://www.corvos.design” />
@endpush

@push('css')
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/siteGlass.css">
@endpush


@section('content')
<div class="relative z-0">
<div style="max-width:100%;" class="h-screen mx-auto bg-flowers" id="cameraBack">
 <div class="row m-0 p-0" id="shadow">
          <div class='bg-flowers' id="glass">
        <!-- left blank -->
          </div>

 </div>
    <div id="glassSpan">
    <div class="headings">corvos.design</div>
    </div>
</div>
</div>
@endsection
@push('scripts')
<script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.lettering.js')}}"></script>
<script src="{{asset('js/jquery.textillate.js')}}"></script>
<script src="{{asset('js/landingPage.js')}}"></script>
@endpush
