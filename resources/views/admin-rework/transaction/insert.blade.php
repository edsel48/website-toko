@extends("../admin-rework/rework")
@section("content")
<div class="p-2">
    <div class="flex flex-row gap-6">
        <div class="flex left flex-1 items-start flex-col gap-5">
            <div class="flex w-full">
                <x-search></x-search>
            </div>
            <div class="products flex flex-wrap h-96 w-full gap-5 overflow-y-scroll">
                @foreach ($products as $p)
                    <a href="" class="border border-primary-1 p-5 flex-1 flex justify-center flex-col items-center gap-3">
                        <div class="img">
                            <img src="https://placehold.co/50" alt="">
                        </div>
                        <div class="text-lg font-semibold">
                            {{ $p->name }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="right flex-1 flex flex-col gap-5 justify-around">

            <div class="text-xl font-bold">
                Products
            </div>

            <div class="products w-full gap-5 flex-col overflow-y-scroll h-96 flex">
                @foreach ($product_details as $detail)
                <div class="flex gap-5">
                    <div class="card border border-primary-1 p-3 rounded-md w-full flex gap-5">
                        <div class="left">
                            <div class="img">
                                <img src="https://placehold.co/50" alt="">
                            </div>
                        </div>

                        <div class="right flex-1">
                            <div class="text-lg font-semibold">
                                Product Name
                            </div>
                            <div class="flex justify-around items-center w-full">
                                <div class="text-md flex-1">
                                    Rp 1000
                                </div>
                                <div class="flex-1 text-right">
                                    {{ $i }} pcs
                                </div>
                                <div class="flex-1 text-right">
                                    Rp {{ $i * 1000 }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr class="my-4">
    <div class="all my-3">
        {{-- SHOULD ADD JQ AJAX ON ALL THE SELECT --}}
        {{-- JQ AJAX CALL WILL CALL THE FUNCTION TO MAKE SURE THE DATA IS SET --}}
        {{-- IN THE SESSION --}}
        <div class="user w-full flex gap-2">
            <div class="flex w-full gap-2 flex-col flex-1">
                <div class="text-xl font-bold">
                    User
                </div>
                <select name="user" id="" class="p-2 border rounded-sm w-full">
                    @foreach ($users as $u)
                        <option name="{{ $u->id }}"> {{  $u->username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex-1 flex flex-col gap-2">
                <div class="text-xl font-bold">
                    Cashier
                </div>
                <select name="cashier" id="" class="p-2 border rounded-sm w-full">
                    @foreach ($admins as $a)
                        <option name="{{ $a->id }}"

                            @if (session()->get("user_logged")->id == $a->id)
                                selected
                            @endif

                            > {{  $a->username }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="totals justify-items-end my-8">
            <div class="text-lg font-bold">
                Total
            </div>
            <div class="font-bold text-3xl">
                Rp {{  implode("." , explode(";", number_format($total, 0, "", ";"))) }}
            </div>
            <div class="submit my-3">
                <x-button primary={{false}}>
                    <x-slot name="text">
                        <span class="ml-3">
                            Submit
                        </span>
                    </x-slot>
                </x-button>
            </div>
        </div>
    </div>
</div>
@endsection
