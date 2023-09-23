@extends('base')
@section('content')
<div class="w-full h-screen mb-40">
    <br>
        <div class="text-xl font-bold">Header Component</div>
        <br>
        <div class="text-lg font-semibold">User Header Component</div>
        <br>
        <x-user.user-header />
        <br>
        <div class="text-lg font-semibold">Admin Header Component</div>
        <br>
        <x-admin-header header="none"/>
    <br>

    <br>
    <div class="text-xl font-bold">Button Component</div>
    <br>
    <a href="{{route("user.index")}}">
        <x-button type="button" text="something else" />
    </a>
    <x-button type="button" text="something else" :primary=false />
    <br>

    <br>
    <div class="text-xl font-bold">Card Component</div>
    <br>
    <div class="flex gap-2">
        @for ($i = 0; $i < 4; $i++)
        <a href={{route("user.show", $product->id)}} class="w-auto shadow-md hover:border-primary-2 rounded-lg">
            <x-product.product-card name="{{$product->name}}" price="{{$product->price}}" stock="{{$product->stock}}" />
        </a>
    @endfor
    </div>
</div>
@endsection
