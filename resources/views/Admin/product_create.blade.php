@extends('../base-test')

@section('content')
<div class="justify-center align-center">
    <div class="bg-white rounded-lg ">
        <div class="text-2xl font-semibold mb-6">{{ __('New Product') }}</div>
        <form method="POST" action="{{route("product.store")}}" class="space-y-4">
            @csrf
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium">{{ __('Product Name') }}</label>

                <input id="name" type="text" class="mt-1 p-2 border @error('name') border-red-500 @enderror" name="name" required autocomplete="name" autofocus>

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col w-full">
                <label for="price" class="text-sm font-medium">{{ __('Product Price (Rp. )') }}</label>

                <input id="price" type="number" class="mt-1 p-2 border @error('price') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" name="price" required autocomplete="price" autofocus>

                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="description" class="text-sm font-medium">{{ __('Product Description') }}</label>

                <textarea id="description" class="mt-1 p-2 border @error('description') border-red-500 @enderror" name="description" required autocomplete="description" autofocus> </textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col w-full">
                <label for="stock" class="text-sm font-medium">{{ __('Product Stocks (pcs)') }}</label>

                <input id="stock" type="number" class="mt-1 p-2 border @error('stock') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" name="stock" required autocomplete="stock" autofocus>

                @error('stock')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col w-full">
                <label for="category_id" class="text-sm font-medium">{{ __('Product Category') }}</label>

                <select id="category_id" class="mt-1 p-2 border @error('category_id') border-red-500 @enderror" name="category_id" required autocomplete="category_id" autofocus>

                <option value="">Select category...</option>
                    @foreach($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>

                @error('category_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col w-full">
                <label for="supplier_id" class="text-sm font-medium">{{ __('Product Supplier') }}</label>

                <select id="supplier_id" class="mt-1 p-2 border @error('supplier_id') border-red-500 @enderror" name="supplier_id" required autocomplete="supplier_id" autofocus>

                <option value="">Select supplier...</option>
                    @foreach($suppliers as $sup)
                        <option value="{{$sup->id}}">{{$sup->name}}</option>
                    @endforeach
                </select>

                @error('supplier_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    {{ __('Add New Product') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
