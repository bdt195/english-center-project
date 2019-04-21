<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    @include('frontend.includes.head')
  </head>
  <body>
    <header class="header">
      @include('frontend.includes.header')
    </header>

    <div class="main__content">
      @yield('content')
    </div>

    <!-- aside menu when reponsive screen mobie -->
    @include('frontend.includes.aside')

    <footer class="footer">
      @include('frontend.includes.footer')
    </footer>

    <script src="{{asset('frontend/js/vendor.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
  </body>
</html>