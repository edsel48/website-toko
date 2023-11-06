@extends("../admin-rework/rework")
@section("content")
<div class="flex gap-5 justify-around flex-auto">
    <a href="{{route("admin-rework.product")}}" class="border border-primary-1 rounded-md shadow-md flex justify-around items-center p-5 flex-1">
        <div class="logo flex gap-2 items-start">
            <div class="bg-gray-50 rounded-full p-5">
                <i class="fa-solid fa-boxes-stacked"></i>
            </div>
            <div class="font-semibold">
                <div class="font-bold">
                    Product Count
                </div>
                <div class="count">
                    {{$product}}
                </div>
            </div>
        </div>
    </a>
    <a href="{{route("admin-rework.category")}}" class="border border-primary-1 rounded-md shadow-md flex justify-around items-center p-5 flex-1">
        <div class="logo flex gap-2 items-start">
            <div class="bg-gray-50 rounded-full p-5">
                <i class="fa-solid fa-folder"></i>
            </div>
            <div class="font-semibold">
                <div class="font-bold">
                    Category Count
                </div>
                <div class="count">
                    {{$category}}
                </div>
            </div>
        </div>
    </a>
    <a href="{{route("admin-rework.promo")}}" class="border border-primary-1 rounded-md shadow-md flex justify-around items-center p-5 flex-1">
        <div class="logo flex gap-2 items-start">
            <div class="bg-gray-50 rounded-full p-5">
                <i class="fa-solid fa-tag"></i>
            </div>
            <div class="font-semibold">
                <div class="font-bold">
                    Promo Count
                </div>
                <div class="count">
                    {{$promo}}
                </div>
            </div>
        </div>
    </a>
    <a href="{{route("admin-rework.supplier")}}" class="border border-primary-1 rounded-md shadow-md flex justify-around items-center p-5 flex-1">
        <div class="logo flex gap-2 items-start">
            <div class="bg-gray-50 rounded-full p-5">
                <i class="fa-solid fa-truck"></i>
            </div>
            <div class="font-semibold">
                <div class="font-bold">
                    Supplier Count
                </div>
                <div class="count">
                    {{$supplier}}
                </div>
            </div>
        </div>
    </a>
</div>
<div class="flex gap-5 justify-around flex-auto my-5">
    <a href="{{route("admin-rework.pos")}}" class="border border-primary-1 rounded-md shadow-md flex justify-around items-center p-5 flex-1">
        <div class="logo flex gap-2 items-start">
            <div class="bg-gray-50 rounded-full p-5">
                <i class="fa-solid fa-money-bill"></i>
            </div>
            <div class="font-semibold">
                <div class="font-bold">
                    POS Count
                </div>
                <div class="count">
                    {{$transaction}}
                </div>
            </div>
        </div>
    </a>
    <a href="{{route("admin-rework.user")}}" class="border border-primary-1 rounded-md shadow-md flex justify-around items-center p-5 flex-1">
        <div class="logo flex gap-2 items-start">
            <div class="bg-gray-50 rounded-full p-5">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="font-semibold">
                <div class="font-bold">
                    User Count
                </div>
                <div class="count">
                    {{$user}}
                </div>
            </div>
        </div>
    </a>
    <a href="{{route("admin-rework.unit")}}" class="border border-primary-1 rounded-md shadow-md flex justify-around items-center p-5 flex-1">
        <div class="logo flex gap-2 items-start">
            <div class="bg-gray-50 rounded-full p-5">
                <i class="fa-solid fa-barcode"></i>
            </div>
            <div class="font-semibold">
                <div class="font-bold">
                    Unit Count
                </div>
                <div class="count">
                    {{$unit}}
                </div>
            </div>
        </div>
    </a>
</div>

@endsection
