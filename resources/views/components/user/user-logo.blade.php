<a href="{{route('user.index')}}" class="hero flex flex-col flex-1">
    @if($type == "footer")
    <div class="text-white">
        <div class="font-bold text-xl">
            {{ "TOKOKU GEMING" }}
        </div>
        <div class="font-bold text-sm">
            {{ "WELCOME TO TOKOKU" }}
        </div>
    </div>
    @else
    <div class="text-primary-1">
        <div class="font-bold text-xl">
            {{ "TOKOKU GEMING" }}
        </div>
        <div class="font-bold text-sm">
            {{ "WELCOME TO TOKOKU" }}
        </div>
    </div>
    @endif
</a>
