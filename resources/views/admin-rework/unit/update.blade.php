@extends("../admin-rework/rework")

@section("content")
    <div class="text-3xl font-bold">
        Update {{ $unit->product->name }} Units
    </div>
    <form method="POST" action="{{route("unit.update", $unit->id)}}" class="space-y-4">
        @csrf
        @method("put")
        <div class="flex w-full gap-5">
            <div class="flex flex-col flex-1">
                <label for="stock" class="text-sm font-medium">{{ __('Unit Stock') }}</label>

                <input id="stock" type="number" class="mt-1 p-2 border @error('stock') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none
                " name="stock" required autocomplete="stock" autofocus value="{{$unit->stock}}">

                @error('stock')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col flex-1">
                <label for="price" class="text-sm font-medium">{{ __('Unit Price') }}</label>

                <input id="price" type="number" class="mt-1 p-2 border @error('price') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none
                " name="price" required autocomplete="price" autofocus value="{{$unit->price}}">

                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex w-full gap-5">
            {{-- HEIGHT --}}
            <div class="flex flex-col flex-1">
                <label for="height" class="text-sm font-medium">{{ __('Unit Height') }}</label>

                <input id="height" type="number" class="mt-1 p-2 border @error('height') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none
                " name="height" required autocomplete="height" autofocus value="{{$unit->height}}">

                @error('height')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            {{-- WIDTH --}}
            <div class="flex flex-col flex-1">
                <label for="width" class="text-sm font-medium">{{ __('Unit Width') }}</label>

                <input id="width" type="number" class="mt-1 p-2 border @error('width') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none
                " name="width" required autocomplete="width" autofocus value="{{$unit->width}}">

                @error('width')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            {{-- LENGTH --}}
            <div class="flex flex-col flex-1">
                <label for="length" class="text-sm font-medium">{{ __('Unit Length') }}</label>

                <input id="length" type="number" class="mt-1 p-2 border @error('length') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none
                " name="length" required autocomplete="length" autofocus value="{{$unit->length}}">

                @error('length')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            {{-- WEIGHT --}}
            <div class="flex flex-col flex-1">
                <label for="weight" class="text-sm font-medium">{{ __('Unit Weight') }}</label>

                <input id="weight" type="number" class="mt-1 p-2 border @error('weight') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none
                " name="weight" required autocomplete="weight" autofocus value="{{$unit->weight}}">

                @error('weight')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex justify-end">
            <x-button primary={{false}} type="submit">
                <x-slot name="text">
                    <i class="fa-solid fa-plus"></i>
                    <span class="ml-3">
                        Update Unit
                    </span>
                </x-slot>
            </x-button>
        </div>
    </form>
@endsection
