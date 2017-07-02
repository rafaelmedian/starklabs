@extends('layout')
<header class="w-100 bg-white bg-right pv3">
  @include('layouts.navbar')
</header>

<section class="mt5 mw8 w-100 vh-50 center ph3-m ph2-l center tc">
  <div class="mb6 pa3 pa0-l tc">
    <h1 class="mb1 f2">404.</h1>
    <p class="mb5">You ended up in an empty place. Go back.</p>
    <a href="{{ url ('/') }}" class="f6 f5-ns tc-m dib br-pill ba ph4 pv2 cta"><img class="mr2" src="{{ url('/dist/img/l-arrow.svg')}}" alt=""> Go Back </a>
  </div>
</section>

@include('layouts.footer')
