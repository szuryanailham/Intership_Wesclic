<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wesclic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  </head>
  <body>
      @include('partials.navbar')
      {{-- @include('partials.navbar') --}}
      <div class="container mt-4">
      @yield('container')
      </div>
      {{-- @include('partials.footer') --}}
     
    
    
        
</body>
</html>