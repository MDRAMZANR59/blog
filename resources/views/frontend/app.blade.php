<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TemplateToaster.com</title>
{{-- style --}}
    @include('frontend.partials.style')
  </head>
  <body class="Home">
    <div class="totopshow">
      <a href="#" class="back-to-top"
        ><img alt="Back to Top" src="{{asset('frontend/images/gototop0.png')}}"
      /></a>
    </div>
    <div id="ttr_page" class="container">
{{-- //header --}}
     @include('frontend.partials.header')
{{-- content --}}
     @yield('Content')
      <div style="height: 0px; width: 0px; overflow: hidden"></div>
{{-- footer --}}
     @include('frontend.partials.footer')
      <div style="height: 0px; width: 0px; overflow: hidden; -webkit-margin-bottom-collapse: separate;"></div>
    </div>
{{-- script --}}
    @include('frontend.partials.script')
  </body>
</html>
