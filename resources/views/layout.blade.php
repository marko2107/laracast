<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/contact">Contact us</a></li>
      <li><a href="/about">About us</a></li>
    </ul>
    @yield('content')
  </body>
</html>
