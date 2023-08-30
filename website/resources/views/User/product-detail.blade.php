@extends('../base')

@section('content')
<x-user.user-header />

<div class="bg-white rounded-lg shadow-md p-6 mt-4">
    <div class="flex justify-center">
        <img src="{{ $product->img == "" ? "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fmyrescuedogrescuedme.files.wordpress.com%2F2011%2F09%2Fboo-the-worlds-cutest-dog-profile-picture-on-facebook.jpg&f=1&nofb=1&ipt=221500745647a9d36bc2773e810b0707b5b18ee76d041b83f47d980a5fab9dc8&ipo=images" : $product->img }}" alt="{{ $product->name }}" class="w-1/6 h-auto">
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
        <button class="bg-blue-500 hover:bg-blue-600
        text-white font-semibold py-2 px-4 rounded flex items-center">
            <i class="fas fa-shopping-cart mr-2"></i>
            <span>Add to Cart</span>
        </button>

    </div>
</div>
@endsection