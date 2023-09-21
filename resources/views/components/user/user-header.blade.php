<header>
    <div class="flex justify-around align-center">
        <a href="{{route('user.index')}}" class="hero flex flex-col flex-1">
            <div class="font-bold text-xl text-primary-1">
                {{ "TOKOKU GEMING" }}
            </div>
            <div class="font-bold text-sm text-primary-1">
                {{ "WELCOME TO TOKOKU" }}
            </div>
        </a>

        <div class="routes flex justify-around flex-1 text-primary-2">
            <a href="" class="font-semibold">TEST ROUTE</a>
            <a href="" class="font-semibold">TEST ROUTE</a>
            <a href="" class="font-semibold">TEST ROUTE</a>
        </div>

        <div class="flex flex-1 justify-end space-x-10 text-primary-1">
            @if(!session()->has('user_logged'))
            <a href="{{ route('login.index') }}" class="font-bold">
                Login
            </a>
            @else
            <div class="text-md font-semibold">
                {{session()->get('user_logged')->username}}
            </div>
            <div class="text-md text-primary-1">
                <i class="fa-solid fa-shopping-cart"></i>
                Cart
            </div>
            <div class="logout text-md font-semibold text-primary-1">
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <button class='text-primary-1'>
                        <i class="fa-solid fa-sign-out"></i>
                        Log out
                    </button>
                </form>
            </div>
            @endif
        </div>
    </div>
</header>