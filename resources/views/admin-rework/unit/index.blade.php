@extends("../admin-rework/rework")
@section("content")

<div class="flex justify-center flex-col gap-3">
    <div class="flex w-full justify-between items-center p-2 gap-10">
        <div class="flex left flex-1 items-center">
            <x-search></x-search>
        </div>
        <div class="right">
            <a href="{{route("unit.create")}}" class="w-full">
                <x-button primary={{false}}>
                    <x-slot name="text">
                        <i class="fa-solid fa-plus"></i>
                        <span class="ml-3">
                            Create New Unit
                        </span>
                    </x-slot>
                </x-button>
            </a>
        </div>
    </div>
    <x-table.table>
        <x-slot name="head">
            <x-table.thead>
                <x-slot name="row">
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Product Name
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Stock
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Price
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Heigth
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Length
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Width
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Weight
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-right">
                        Action
                    </th>
                </x-slot>
            </x-table.thead>
        </x-slot>
        <x-slot name="body">
            <tbody class="pl-5 rounded">
                @forelse ($unit as $cat)
                <tr>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$cat->product->name}}
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$cat->stock}} Pcs
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            Rp {{$cat->price}}
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            Rp {{$cat->height}}
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$cat->length}}
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$cat->width}}
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$cat->height}}
                        </div>
                    </td>
                    <td>
                        <div class="flex justify-end items-center gap-2 px-5">
                            <form action="{{ route("unit.edit", $cat->id)}}" method="GET">
                                <button class="border border-primary-1 p-2 bg-yellow-50 rounded-lg" type="submit">
                                    <i class="fa-solid fa-pen"></i>
                                    <span class="ml-2">
                                        Update
                                    </span>
                                </button>
                            </form>

                            {{-- <form action="{{ route("unit.destroy", $cat)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="border border-primary-1 p-2 bg-red-50 rounded-lg" type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                    <span class="ml-2">
                                        Delete
                                    </span>
                                </button>
                            </form> --}}
                        </div>
                    </td>
                </tr>
                @empty
                    <th colspan="8" class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                        No Unit Found
                    </th>
                @endforelse
            </tbody>
        </x-slot>
    </x-table.table>
</div>

@endsection
