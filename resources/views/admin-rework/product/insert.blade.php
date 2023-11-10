@extends('../admin-rework/rework')

@section('content')
{{ request()->query("tab") }}
<div class="justify-center align-center">
    <div class="bg-white rounded-lg flex flex-col gap-3">
        <div class="text-2xl font-semibold">{{ __('Update '. $product->name) }}</div>
        <div class="text-md text-gray-500">
            Updates the basic data for the product
        </div>
        <form method="POST" action="{{route("product.update", $product->id)}}" class="space-y-4">
            @csrf
            @method("put")
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium">{{ __('Product Name') }}</label>

                <input id="name" type="text" class="mt-1 p-2 border @error('name') border-red-500 @enderror" name="name" required autocomplete="name" autofocus value="{{$product->name}}">

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="description" class="text-sm font-medium">{{ __('Product Description') }}</label>

                <textarea id="description" class="mt-1 p-2 border @error('description') border-red-500 @enderror" name="description" required autocomplete="description" autofocus>{{$product->description}}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col w-full">
                <label for="stock" class="text-sm font-medium">{{ __('Product Stocks (pcs)') }}</label>

                <input id="stock" type="number" class="mt-1 p-2 border @error('stock') border-red-500 @enderror
                [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" name="stock" required autocomplete="stock" autofocus value="{{$product->stock}}">

                @error('stock')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex w-full gap-5">
                <div class="flex flex-col w-full">
                    <label for="category_id" class="text-sm font-medium">{{ __('Product Category') }}</label>

                    <select id="category_id" class="mt-1 p-2 border @error('category_id') border-red-500 @enderror" name="category_id" required autocomplete="category_id" autofocus>

                    <option selected>Select category...</option>
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

                    <option selected>Select supplier...</option>
                        @foreach($suppliers as $sup)
                            <option value="{{$sup->id}}">{{$sup->name}}</option>
                        @endforeach
                    </select>

                    @error('supplier_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end">
                <div class="w-full">
                    <x-button primary={{false}} type="submit">
                        <x-slot name="text">
                            <i class="fa-solid fa-pen"></i>
                            <span class="ml-3">
                                Update Product
                            </span>
                        </x-slot>
                    </x-button>
                </div>
            </div>
        </form>

        <hr>

        <div class="text-2xl font-semibold">{{ __($product->name . "'s Units & Sizes") }}</div>
        <span class="text-md text-gray-500">Update Product Units and Sizes</span>
        <div class="text-right">
            <a href="{{ route("admin-rework.add.unit", [
                $product->id
            ]) }}">
                <x-button primary={{false}} type="button">
                    <x-slot name="text">
                        <i class="fa-solid fa-plus"></i>
                        <span class="ml-3">
                            <input type="submit" value="Add New Unit" form="add.unit.form">
                        </span>
                    </x-slot>
                </x-button>
            </a>
        </div>
        <div class="flex flex-col my-4 gap-5">
            <form name="{{ 'form' }}" action={{ route("admin-rework.save.unit") }} class="flex gap-5 flex-col" method="POST">
                @csrf
                @foreach($product->unit as $unit)
                <hr>
                    <div class="flex gap-5 items-center">
                        <x-input value="{{ $unit->unit_name }}" name="{{ 'unit_name'. '_' . $unit->id }}"               title="Product's Unit Name"></x-input>
                        <x-input value="{{ $unit->quantity }}"  name="{{ 'quantity' . '_' . $unit->id }}"               title="Product's Unit Quantity (Pcs)"></x-input>
                        <x-input value="{{ $unit->price }}"     name="{{ 'price'    . '_' . $unit->id }}" type="number" title="Product's Price (Rp)"></x-input>
                        <x-input value="{{ $unit->level }}"     name="{{ 'level'    . '_' . $unit->id }}" type="number" title="Product's Level"></x-input>
                        <a style="h-full" href="{{ route("admin-rework.delete.unit", $unit->id) }}">
                            <x-button primary={{false}} type="button">
                                <x-slot name="text">
                                    <i class="fa-solid fa-trash-can text-red-500"></i>
                                </x-slot>
                            </x-button>
                        </a>
                    </div>
                    <div class="flex gap-5 items-center">
                        <x-input value="{{ $unit->size->length }}" name="{{ 'length'    . '_' . $unit->id }}" type="number" title="Product's Unit Length (Cm)"></x-input>
                        <x-input value="{{ $unit->size->width }}" name="{{  'width'    . '_' . $unit->id }}" type="number"  title="Product's Unit Width (Cm)"></x-input>
                        <x-input value="{{ $unit->size->height }}" name="{{ 'height'    . '_' . $unit->id }}" type="number" title="Product's Unit Height (Cm)"></x-input>
                        <x-input value="{{ $unit->size->weight }}" name="{{ 'weight'    . '_' . $unit->id }}" type="number" title="Product's Unit Weight (Kg)"></x-input>
                    </div>
                <hr>
                @endforeach
                <x-button primary={{false}} type="submit">
                    <x-slot name="text">
                        Save All
                    </x-slot>
                </x-button>
            </form>
        </div>

    </div>
</div>
@endsection
