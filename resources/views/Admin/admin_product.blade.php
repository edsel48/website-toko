@extends('../base-test')

@section('content')
    <h1 class="flex text-xl font-bold justify-center">
        ADMIN
    </h1>
    <x-admin-header header="product" />
    <a href="{{route("product.create")}}" class="flex justify-end align-center font-bold">
        New Product
    </a>
    <table class="w-full text-left text-sm font-light">
        <thead class="border-b font-medium dark:border-neutral-500">
          <tr>
            <th scope="col" class="px-6 py-4">Id</th>
            <th scope="col" class="px-6 py-4">Name</th>
            <th scope="col" class="px-6 py-4">Price</th>
            <th scope="col" class="px-6 py-4">Description</th>
            <th scope="col" class="px-6 py-4">{{ "Stock (pcs)" }}</th>
            <th scope="col" class="px-6 py-4">{{ "Category" }}</th>
            <th scope="col" class="px-6 py-4">{{ "Supplier" }}</th>
            <th scope="col" class="px-6 py-4">Action</th>

          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$product->id}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$product->name}}</td>
                <td class="whitespace-nowrap px-6 py-4"> {{$product->price}} </td>
                <td class="whitespace-nowrap px-6 py-4"> {{$product->description}} </td>
                <td class="whitespace-nowrap px-6 py-4">{{$product->stock}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$product->category->name}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$product->supplier->name}}</td>
                <td class="whitespace-nowrap px-6 py-4">
                    <form action="{{ route("product.destroy", $product->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection
