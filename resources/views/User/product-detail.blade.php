@extends('../base')

@section('content')
<x-user.user-header />

<div class="bg-white rounded-lg shadow-md p-6 mt-4">
    <div class="flex justify-center">
        <img src="{{ $product->img == "" ? "https://placehold.co/300x150" :  $product->img }}" alt="{{ $product->name }}" class="w-1/6 h-auto">
    </div>
    <h1 class="text-2xl font-semibold mt-4">{{ $product->name }}</h1>
    <p class="text-gray-600 text-sm">{{ $product->description }}</p>
    <div class="flex justify-between items-center mt-4">
        <span class="text-lg font-semibold">Rp {{ $product->price }}</span>
        <span class="text-gray-600">In Stock: {{ $product->stock }}</span>
    </div>
    <div class="mt-4">
        @if ($product->deleted)
            <span class="bg-red-500 text-white px-2 py-1 rounded-md">Deleted</span>
        @else
            <span class="bg-green-500 text-white px-2 py-1 rounded-md">Available</span>
        @endif
    </div>
    <div class="mt-4 flex justify-end align-center ">
        <x-button type="button" id="{{$product->id}}" :primary=false>
            <x-slot name="text">
                <i class="fas fa-shopping-cart mr-2"></i>
                Add to Cart
            </x-slot>
        </x-button>
    </div>
</div>
@endsection
