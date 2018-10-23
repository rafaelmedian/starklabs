@include('layouts.head')
<header class="w-100 bg-white bg-right pv3">
  @include('layouts.navbar')
</header>

<section class="mt5 mw8 w-100 vh-50 center ph3-m ph2-l center tc">
  <div class="mb6 pa3 pa0-l tc">
    <h1 class="mb3 f2">Thank you. We will contact you very soon.</h1>
    <p class="mb5">Keep having fun meanwhile, and spread the word.</p>
    <a href="{{ secure_url('/') }}" class="grow f6 f5-ns tc-m dib br-pill ba ph4 pv2 cta">
    <img class="mr2 v-mid" height="19px" src="{{ secure_asset('dist/img/l-arrow.svg') }}" alt="cta"> 
    Go Back </a>
  </div>
</section>

@include('layouts.footer')
