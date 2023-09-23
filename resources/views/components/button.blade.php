@if ($primary)
<button type="{{$type}}" class="
bg-primary-1 text-white
border border-primary-1 rounded-2xl
px-3 py-2
font-sans
flex-1 w-full
hover:bg-white hover:text-primary-1 hover:transition-colors
" id="{{$id}}">
    {{$text}}
</button>
@else
<button type="{{$type}}" class="text-primary-1 bg-white
border border-primary-1 rounded-2xl
px-3 py-2
font-sans
flex-1 w-full
hover:bg-primary-1 hover:text-white hover:transition-colors" id="{{$id}}">
    {{$text}}
</button>
@endif
