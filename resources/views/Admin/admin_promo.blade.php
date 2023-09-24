@extends('../base-test')

@section('content')
    <h1 class="flex text-xl font-bold justify-center">
        ADMIN
    </h1>
    <x-admin-header header="promo" />
    <a href="{{route("promo.create")}}" class="flex justify-end align-center font-bold">
        New Promo
    </a>
    <table class="w-full text-left text-sm font-light">
        <thead class="border-b font-medium dark:border-neutral-500">
          <tr>
            <th scope="col" class="px-6 py-4">Id</th>
            <th scope="col" class="px-6 py-4">Promo Name</th>
            <th scope="col" class="px-6 py-4">Product Name</th>
            <th scope="col" class="px-6 py-4">Start Date</th>
            <th scope="col" class="px-6 py-4">End Date</th>
            <th scope="col" class="px-6 py-4">Discount</th>
            <th scope="col" class="px-6 py-4">Min Purchase</th>
            <th scope="col" class="px-6 py-4">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($promos as $promo)
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$promo->id}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$promo->name}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$promo->product->name}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$promo->start_date}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$promo->end_date}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$promo->discount}} % </td>
                <td class="whitespace-nowrap px-6 py-4">{{$promo->min_purchase}}</td>

                <td class="whitespace-nowrap px-6 py-4">
                    <form action="{{ route("promo.destroy", $promo->id)}}" method="POST">
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
