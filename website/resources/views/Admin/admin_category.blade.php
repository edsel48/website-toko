@extends('../base')

@section('content')
    <h1 class="flex text-xl font-bold justify-center">
        ADMIN
    </h1>
    <x-admin-header header="category" />
    <a href="{{route("category.create")}}" class="flex justify-end align-center font-bold">
        New Category
    </a>
    <table class="w-full text-left text-sm font-light">
        <thead class="border-b font-medium dark:border-neutral-500">
          <tr>
            <th scope="col" class="px-6 py-4">Id</th>
            <th scope="col" class="px-6 py-4">Category Name</th>
            <th scope="col" class="px-6 py-4">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $cat)
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$cat->id}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$cat->name}}</td>
                <td class="whitespace-nowrap px-6 py-4">
                    <form action="{{ route("promo.destroy", $cat->id)}}" method="POST">
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
