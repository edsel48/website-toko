<div class="product flex-1 rounded-md border-1 border-solid border-primary-1 p-5">
    <div class="product-name text-xl font-bold">
        {{$name}}
    </div>
    <div class="my-5 text-primary-1 font-semibold">
        Rp {{(int)$price/ 1000}}k
    </div>
    <img src="{{$img}}" alt="{{$name}}">
</div>