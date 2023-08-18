@extends('../base')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="text-2xl font-semibold mb-6">{{ __('Register') }}</div>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div class="flex flex-col">
                    <label for="name" class="text-sm font-medium">{{ __('Name') }}</label>
                    <input id="name" type="text" class="mt-1 p-2 border @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="email" class="text-sm font-medium">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="mt-1 p-2 border @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="password" class="text-sm font-medium">{{ __('Password') }}</label>
                    <input id="password" type="password" class="mt-1 p-2 border @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="password-confirm" class="text-sm font-medium">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="mt-1 p-2 border" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="flex justify-end">
                    Already have account?<a href="{{route('login.index')}}" class="text-blue-600 ml-1">Log in BDO</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection