@extends('../base')

@section("content")
<x-user.user-header />
<section class="pb-10">
    <div class="h-screen">
        <div class="font-bold text-xl item-start my-8">
            Product Kami
        </div>
        <div class="flex gap-10 w-full flex-wrap justify-between px-8">
            @foreach ($products as $product)
            <x-product.product-card name="{{$product->name}}" price="{{$product->price}}"
                stock="{{$product->stock}}" id="{{$product->id}}" />
            @endforeach
        </div>
    </div>
</section>

@endsection
