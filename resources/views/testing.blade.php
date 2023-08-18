<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{{ asset('css/app.css') }}}" rel="stylesheet">
</head>
<body class="flex justify-center items-center w-full h-screen">
  <?php
    for ($i=0; $i < 10; $i++) { 
        print('<h1 class="text-sm font-bold border border-black rounded-md p-2 m-3 text-blue">Hello world</h1>');
    }
  ?>

</body>
</html>