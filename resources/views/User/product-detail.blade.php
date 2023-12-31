@extends('../base')

@section('content')
<x-user.user-header />

<div class="bg-white rounded-lg p-6 mt-16 h-screen">
    <div class="flex justify-center items-center">
        <div class="w-full px-36">
            <div class="flex justify-center">
                <img src="{{ $product->img == "" ? "https://placehold.co/300x150" :  $product->img }}" alt="{{ $product->name }}" class="w-auto h-1/2">
            </div>
            <h1 class="text-2xl font-semibold mt-4">{{ $product->name }}</h1>
            <p class="text-gray-600 text-sm">{{ $product->description }}</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-lg font-semibold">Rp {{ $product->unit->price }}</span>
                <span class="text-gray-600">In Stock: {{ $product->unit->stock }}</span>
            </div>
            <div class="mt-4">
                <span class="bg-green-500 text-white px-2 py-1 rounded-md">Available</span>
            </div>
            <div class="mt-4 flex justify-end align-center ">
            <form action="{{ route("cart.add", $product->id) }}" method="POST" class="flex flex-row gap-5 items-center">
                    @csrf
                    <input type="number" name="qty" class="p-2 border border-primary-1 rounded-md" placeholder="quantity" min=1> <p> pcs </p>
                    <x-button type="submit" id="{{$product->id}}" :primary=false>
                        <x-slot name="text">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Add to Cart
                        </x-slot>
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
