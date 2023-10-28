@extends('../admin-rework/rework')

@section('content')
<div class="justify-center align-center">
    <div class="bg-white rounded-lg ">
        <div class="text-2xl font-semibold mb-6">{{ __('Update Category') }}</div>
        <form method="POST" action="{{route("category.update", $cat->id)}}" class="space-y-4">
            @csrf
            @method("put")
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium">{{ __('Category Name') }}</label>

                <input id="name" type="text" class="mt-1 p-2 border @error('name') border-red-500 @enderror" name="name" required autocomplete="name" autofocus value="{{$cat->name}}">

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <div>
                    <x-button primary={{false}} type="submit">
                        <x-slot name="text">
                            <i class="fa-solid fa-pen"></i>
                            <span class="ml-3">
                                Update Category
                            </span>
                        </x-slot>
                    </x-button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
