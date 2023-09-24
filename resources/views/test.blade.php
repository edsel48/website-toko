@extends('base-test')
@section('content')
<div class="w-full h-auto mb-40 flex flex-col gap-10">

    <div class="first gap-10 flex flex-col">
        <div class="text-xl font-bold">Header Component</div>

        <div class="text-lg font-semibold">User Header Component</div>

        <x-user.user-header />

        <div class="text-lg font-semibold">Admin Header Component</div>

        <x-admin-header header="category"/>
    </div>

    <div class="flex flex-col flex-1 gap-10">
        <div class="text-xl font-bold">Button Component</div>

        <a href="{{route("user.index")}}" class="flex gap-5">
            <x-button type="button" text="something else" />
            <x-button type="button" text="something else" />
            <x-button type="button" text="something else" />
        </a>
        <x-button type="button" text="something else" :primary=false />
    </div>

    <div class="flex flex-col flex-1 gap-10">
        <div class="text-xl font-bold">Card Component</div>

        <div class="flex gap-2">
            @for ($i = 0; $i < 4; $i++)
            <x-product.product-card name="{{$product->name}}" price="{{$product->price}}" stock="{{$product->stock}}" id="{{$product->id}}" />
        @endfor
        </div>
    </div>

    <div class="flex flex-col flex-1 gap-10">
        <div class="text-xl font-bold">Links Component</div>
        <div class="links flex gap-2 p-10 justify-center items-center">
            <x-link route="test.index" text="Test Index"/>
            <x-link route="test.index" text="Test Index" :on=true/>
            <x-link route="test.index" text="Test Index"/>
        </div>
        <div class="links flex gap-2 bg-primary-1 justify-center items-center p-10">
            <x-link route="test.index" text="Test Index" :primary=false/>
            <x-link route="test.index" text="Test Index" :primary=false :on=true/>
            <x-link route="test.index" text="Test Index" :primary=false/>
        </div>
    </div>
</div>
@endsection
<x-footer.footer/>
