<a href="{{route($route)}}"

    @if($primary)
    class="
    px-10 transition-all py-2 text-center border border-white

    @if($on)
        border-b-primary-1
    @endif

    hover:border-b-primary-1"
    @else
    class="
    px-10 transition-all py-2 text-center border border-primary-1 text-white

    @if($on)
        border-b-white
    @endif

    hover:border-b-white"
    @endif

>
    {{$text}}
</a>
