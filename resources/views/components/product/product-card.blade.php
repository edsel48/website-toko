<div class="product flex flex-col gap-y-5 flex-1 rounded-lg border border-1 border-solid border-primary-1 p-5">
    <div class="product-name text-2xl font-bold">
        {{$name}}
    </div>
    <div class="text-primary-2 font-semibold">
        Rp {{(int)$price/ 1000}}k
    </div>
    <div class="flex justify-center items-center w-full h-auto rounded-sm overflow-hidden">
        <img src="{{$img}}" alt="{{$name}}">
    </div>
    <div class="flex items-center justify-around gap-x-10">
        <a href="" class="flex-1">
            <x-button type="button" id="{{$name}}">
                <x-slot name="text">
                    Buy Now
                </x-slot>
            </x-button>
        </a>

        <a href="{{route("user.show", $id)}}" class="flex-1">
            <x-button type="button" id="{{$name}}" :primary=false>
                <x-slot name="text">
                    Learn More
                </x-slot>
            </x-button>
        </a>

    </div>
</div>
