@extends('../base')

@section("content")
<table class="border border-primary-1 w-full p-2">
    <tr>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Item Price</th>
        <th>Total Price</th>
    </tr>

    @forelse ($products as $product)
        <tr>
            <td class="text-left"> {{$product[0]->name}}</td>
            <td class="text-right"> {{$product[1]}}</td>
            <td class="text-right"> Rp {{$product[0]->price}}</td>
            <td class="text-right"> Rp {{$product[0]->price * $product[1]}}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4">
                Nothing
            </td>
        </tr>
    @endforelse
</table>
@endsection
