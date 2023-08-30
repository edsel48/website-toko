@extends('../base')

@section("content")
    <x-user.user-header />
    <section class="pb-10">
        <div class="h-screen">
            <div class="font-bold text-xl item-start my-8">
                TERLARIS
            </div>
            <div class="flex gap-10 w-full flex-wrap justify-between px-8">
                @foreach ($products as $product)
                <a href={{route("user.show", $product->id)}}>
                    <x-product.product-card
                        name="{{$product->name}}"
                        price="{{$product->price}}"
                        img=""
                        stock="{{$product->stock}}"
                    />
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
