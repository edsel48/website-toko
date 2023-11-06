<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{{ asset('css/app.css') }}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>
<body class="w-full h-screen bg-white overflow-hidden">
    <x-sidebar.sidebar>
        <x-slot name="items">
            @foreach (session()->get("items") as [$item, $icon])
                <x-sidebar.sidebar-item route="admin-rework.{{strtolower($item)}}" active="{{session()->get('active') == strtolower($item)}}">
                    <x-slot name="text">
                        <i class="fa-solid fa-{{strtolower($icon)}}"></i>
                        <span class="ml-3">
                            {{$item}}
                        </span>
                    </x-slot>
                </x-sidebar.sidebar-item>
            @endforeach
        </x-slot>
    </x-sidebar.sidebar>
    <div class="p-4 sm:ml-64">
        @yield("content")
    </div>
</body>
</html>
