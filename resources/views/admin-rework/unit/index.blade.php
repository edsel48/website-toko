@extends("../admin-rework/rework")
@section("content")

<div class="flex justify-center flex-col gap-3">
    <div class="flex w-full justify-between items-center p-2 gap-10">
        <div class="flex left flex-1 items-center">
            <x-search></x-search>
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
                        Height
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
                            {{implode("." , explode(";", number_format($cat->stock, 0, "", ";")))}} pcs
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            Rp {{ implode("." , explode(";", number_format($cat->price, 0, "", ";"))) }}
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$cat->height}} cm
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$cat->length}} cm
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$cat->width}} cm
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$cat->weight}} kg
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
