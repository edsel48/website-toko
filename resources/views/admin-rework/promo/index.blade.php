@extends("../admin-rework/rework")
@section("content")
    <div class="flex justify-center flex-col gap-3">
        <div class="flex w-full justify-between items-center p-2 gap-10">
            <div class="flex left flex-1 items-center">
                <x-search></x-search>
            </div>
            <div class="right">
                <a href="{{route("promo.create")}}" class="w-full">
                    <x-button primary={{false}}>
                        <x-slot name="text">
                            <i class="fa-solid fa-plus"></i>
                            <span class="ml-3">
                                Create New promo
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
                            Promo Name
                        </th>
                        <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Product Name
                        </th>
                        <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Start Date
                        </th>
                        <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            End Date
                        </th>
                        <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Discount
                        </th>
                        <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Minimal Purchase
                        </th>
                        <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-right">
                            Action
                        </th>
                    </x-slot>
                </x-table.thead>
            </x-slot>
            <x-slot name="body">
                <tbody class="pl-5 rounded">
                    @forelse ($promos as $cat)
                    <tr>
                        <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            <div class="p-3">
                                {{$cat->name}}
                            </div>
                        </td>
                        <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            <div class="p-3">
                                {{$cat->product->name}}
                            </div>
                        </td>
                        <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            <div class="p-3">
                                {{$cat->start_date}}
                            </div>
                        </td>
                        <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            <div class="p-3">
                                {{$cat->end_date}}
                            </div>
                        </td>
                        <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            <div class="p-3">
                                {{$cat->discount}} %
                            </div>
                        </td>
                        <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            <div class="p-3">
                                {{implode("." , explode(";", number_format($cat->min_purchase, 0, "", ";")))}} pcs
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-end items-center gap-2 px-5">
                                <form action="{{ route("promo.edit", $cat->id)}}" method="GET">
                                    <button class="border border-primary-1 p-2 bg-yellow-50 rounded-lg" type="submit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                </form>

                                <form action="{{ route("promo.destroy", $cat->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="border border-primary-1 p-2 bg-red-50 rounded-lg" type="submit">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                        <th colspan="7" class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                            No Promo Found
                        </th>
                    @endforelse
                </tbody>
            </x-slot>
        </x-table.table>
    </div>
@endsection
