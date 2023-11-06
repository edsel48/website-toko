@extends('../admin-rework/rework')

@section('content')
<div class="justify-center align-center">
    <div class="bg-white rounded-lg ">
        <div class="text-2xl font-semibold mb-6">{{ __('Update Promo') }}</div>
        <form method="POST" action="{{route("promo.update", $cat->id)}}" class="space-y-4">
            @csrf
            @method("put")
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium">{{ __('Promo Name') }}</label>

                <input id="name" type="text" class="mt-1 p-2 border @error('name') border-red-500 @enderror" name="name" required autocomplete="name" autofocus value="{{ $cat->name }}">

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col w-full">
                <label for="product_id" class="text-sm font-medium">{{ __('Choosen Product') }}</label>

                <select id="product_id" class="mt-1 p-2 border @error('product_id') border-red-500 @enderror" name="product_id" required autocomplete="product_id" autofocus>

                <option value="">Select product...</option>
                    @foreach($products as $sup)
                        <option value="{{$sup->id}}"

                            @if ($cat->product->id == $sup->id)
                                selected
                            @endif

                            >{{$sup->name}}</option>
                    @endforeach
                </select>

                @error('product_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="start_date" class="text-sm font-medium">{{ __('Start Date') }}</label>

                <input id="start_date" type="date" class="mt-1 p-2 border @error('start_date') border-red-500 @enderror" name="start_date" required autocomplete="start_date" autofocus value="{{ $cat->start_date }}">

                @error('start_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="end_date" class="text-sm font-medium">{{ __('End Date') }}</label>

                <input id="end_date" type="date" class="mt-1 p-2 border @error('end_date') border-red-500 @enderror" name="end_date" required autocomplete="end_date" autofocus value="{{ $cat->end_date }}">

                @error('end_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col w-full">
                <label for="discount" class="text-sm font-medium">{{ __('Product Discount (%)') }}</label>

                <input id="discount" type="number" class="mt-1 p-2 border @error('discount') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" name="discount" required autocomplete="discount" autofocus value="{{ $cat->discount }}">

                @error('discount')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col w-full">
                <label for="min_purchase" class="text-sm font-medium">{{ __('Minimal Purchased Quantity') }}</label>

                <input id="min_purchase" type="number" class="mt-1 p-2 border @error('min_purchase') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" name="min_purchase" required autocomplete="min_purchase" autofocus value="{{ $cat->min_purchase }}">

                @error('min_purchase')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <div class="">
                    <x-button primary={{false}} type="submit">
                        <x-slot name="text">
                            <i class="fa-solid fa-plus"></i>
                            <span class="ml-3">
                                {{ __('Update Promo') }}
                            </span>
                        </x-slot>
                    </x-button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
