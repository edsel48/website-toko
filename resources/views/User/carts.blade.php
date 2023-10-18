@extends('../base')

@section("content")
<table class="border border-primary-1 w-full p-2 table-fixed text-center">
    <thead class="border-b font-medium dark:border-neutral-500">
        <tr>
            <th scope="col" class="px-6 py-4">Item Image</th>
            <th scope="col" class="px-6 py-4">Item Name</th>
            <th scope="col" class="px-6 py-4">Quantity</th>
            <th scope="col" class="px-6 py-4">Item Price</th>
            <th scope="col" class="px-6 py-4">Total Price</th>
        </tr>
    </thead>

    <tbody class="p-2">
        @forelse ($products as $product)
        <tr class="border-b dark:border-neutral-500">
            <td class="whitespace-nowrap px-6 py-4 font-medium">
                <img class="rounded-md" src="https://placehold.co/300x150" alt="">
            </td>
            <td class="whitespace-nowrap px-6 py-4 font-medium">
                {{$product[0]->name}}
            </td>
            <td class="whitespace-nowrap px-6 py-4 font-medium">
                <div class="text-primary-2 text-sm flex items-center justify-around gap-x-5">
                    <x-button type="button" :primary=false>
                        <x-slot name="text">
                            <i class="fa-solid fa-caret-left"></i>
                        </x-slot>
                    </x-button>
                    {{$product[1]}}
                    <x-button type="button" :primary=false>
                        <x-slot name="text">
                            <i class="fa-solid fa-caret-right"></i>
                        </x-slot>
                    </x-button>
                </div>
            </td>
            <td class="whitespace-nowrap px-6 py-4 font-medium">
                Rp {{$product[0]->price}}
            </td>
            <td class="whitespace-nowrap px-6 py-4 font-medium">
                Rp {{$product[0]->price * $product[1]}}
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="5" class='text-center'>
                    Nothing
                </td>
            </tr>
        @endforelse
        <tr>

        </tr>
        <tr class="text-left font-bold">
            <td colspan="4" class="px-6 py-4">
                Total
            </td>
            <td class="text-right px-6 py-4">
                Rp {{$totals}}
            </td>
        </tr>
    </tbody>
</table>
@endsection
