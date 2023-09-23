<header>
    <div class="flex justify-around align-center">
        <x-user.user-logo/>

        <div class="flex flex-1 justify-end space-x-10 text-primary-1">
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
            <div class="text-md text-primary-1">
                <i class="fa-solid fa-shopping-cart"></i>
                Cart
            </div>
            <div class="logout text-md font-semibold text-primary-1">
                <form action="{{route('user.store')}}" method="post">
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
