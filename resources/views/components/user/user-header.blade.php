<header>
    <div class="flex justify-around align-center">
        <a href="{{route("user.index")}}" class="hero flex flex-col flex-1">
            <div class="font-bold text-xl">
                {{ "TOKOKU GEMING" }}
            </div>
            <div class="font-bold text-sm">
                {{ "WELCOME TO TOKOKU" }}
            </div>
        </a>

        <div class="routes flex justify-around flex-1">
            <a href="" class="font-semibold">TEST ROUTE</a>
            <a href="" class="font-semibold">TEST ROUTE</a>
            <a href="" class="font-semibold">TEST ROUTE</a>
        </div>

        <div class="flex flex-1 justify-end space-x-10">
            <a href="{{ route("login.index") }}" class="text-md">
                LOGIN
            </a>
            <div class="text-md font-semibold">
                USERNAME
            </div>
            <div class="text-md text-blue-200">
                CART
            </div>
        </div>
    </div>
</header>
