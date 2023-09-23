<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{{ asset('css/app.css') }}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>
<body class="w-full h-screen bg-white">
    <div class="wrapper p-10">
        @yield('content')
    </div>
    <x-footer.footer/>
</body>
</html>
