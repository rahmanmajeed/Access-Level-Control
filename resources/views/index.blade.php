<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('_partials.head')
   @include('_partials.stylesheet')
  <body class="horizontal-nav fixed-layout skin-default">
   @include('_partials.loader')
   <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      @include('_partials.header')
       @include('_partials.sidebar')
        @include('_partials.container')
         @include('_partials.footer')
    </div>
  @include('_partials.js')
  </body>
</html>
