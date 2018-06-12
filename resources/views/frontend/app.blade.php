<!DOCTYPE html>
<html lang="en">

  <head>

   @include('frontend/layouts/head')

  </head>

  <body class="@yield('body_class')">

    @include('frontend/layouts/header')

    @section('main-content')
    @show

    @include('frontend/layouts/footer')

  </body>

</html>
