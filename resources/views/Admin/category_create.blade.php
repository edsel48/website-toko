@extends('../base-test')

@section('content')
<div class="justify-center align-center">
    <div class="bg-white rounded-lg ">
        <div class="text-2xl font-semibold mb-6">{{ __('New Category') }}</div>
        <form method="POST" action="{{route("category.store")}}" class="space-y-4">
            @csrf
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium">{{ __('Category Name') }}</label>

                <input id="name" type="text" class="mt-1 p-2 border @error('name') border-red-500 @enderror" name="name" required autocomplete="name" autofocus>

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    {{ __('Add New Category') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
