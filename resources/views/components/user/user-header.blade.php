<header>
    <div class="flex justify-around align-center">
        <x-user.user-logo/>

        <div class="flex flex-1 items-center justify-end gap-x-5 text-primary-1">
            @if(!session()->has('user_logged'))
            <a href="{{ route('login.index') }}" class="font-bold">
                <x-button type="submit" :primary=false>
                    <x-slot name="text">
                        <i class="fa-solid fa-sign-in"></i>
                        Login
                    </x-slot>
                </x-button>
            </a>
            @else
            <div class="text-md font-semibold">
                {{session()->get('user_logged')->username}}
            </div>
            <a href="{{route("my-cart")}}">
                <x-button type="button" :primary=false>
                    <x-slot name="text">
                        <i class="fa-solid fa-shopping-cart"></i>
                        Cart
                    </x-slot>
                </x-button>
            </a>
            <div class="logout text-md font-semibold text-primary-1">
                <form action="{{route('login.logout')}}" method="post">
                    @csrf
                    <x-button type="submit" :primary=false>
                        <x-slot name="text">
                            <i class="fa-solid fa-sign-out"></i>
                            Log out
                        </x-slot>
                    </x-button>
                </form>
            </div>
            @endif
        </div>
    </div>
</header>
