<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
    <meta content='.' property='og:description'>
    <meta content='' property='og:image'>
    <meta content='' property='og:site_name'>
    <meta content='' property='og:title'>
    <meta content='website' property='og:type'>
    <meta content='' property='og:url'>
    <meta content='summary' name='twitter:card'>
    <meta content='' name='twitter:url'>
    <meta content='' name='twitter:title'>
    <meta content='' name='twitter:description'>
    <meta content='' name='twitter:image'>
    <meta content='@' name='twitter:site'>
    <link href='/img/favicon.ico' rel='shortcut icon'>
    <link href='/img/apple-touch-icon.png' rel='apple-touch-icon'>
    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.7.0/css/tachyons.min.css"/>
    <link href="{{ mix('dist/css/app.css')}}" rel='stylesheet'>
    <title>Stark Ai Labs</title>
  </head>
<body>

  <div class="">
      @yield('content')
  </div>

  <script type="text/javascript" src="{{ mix('dist/js/app.js') }}"></script>
</body>
</html>
