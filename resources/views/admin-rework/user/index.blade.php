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
                        User ID
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Username
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                        User Type
                    </th>
                    <th class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-right">
                        Action
                    </th>
                </x-slot>
            </x-table.thead>
        </x-slot>
        <x-slot name="body">
            <tbody class="pl-5 rounded">
                @forelse ($users as $user)
                <tr>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$user->id}}
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            {{$user->username}}
                        </div>
                    </td>
                    <td class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        <div class="p-3">
                            @switch($user->type)
                                @case(0)
                                    <div class="px-2 py-1 bg-teal-100 text-teal-800 flex justify-center items-center rounded-full">
                                        {{ "SUPER ADMIN" }}
                                    </div>
                                    @break
                                @case(1)
                                    <div class="px-2 py-1 bg-yellow-50 text-yellow-600 flex justify-center items-center rounded-full">
                                        {{ "USER" }}
                                    </div>
                                    @break
                                @default
                                    {{ "UNKNOWN" }}
                            @endswitch
                        </div>
                    </td>
                    <td>
                        <div class="flex justify-end items-center gap-2 px-5">
                            @switch($user->type)
                                @case(0)
                                    <form action="{{ route("admin-rework.upgrade", $user->id)}}" method="GET">
                                        <button class="border border-primary-1 p-2 bg-yellow-50 rounded-lg" type="submit">
                                            <i class="fa-solid fa-caret-down"></i>
                                            <span class="ml-2">
                                                Downgrade to User
                                            </span>
                                        </button>
                                    </form>
                                    @break
                                @case(1)
                                    <form action="{{ route("admin-rework.upgrade", $user->id)}}" method="GET">
                                        <button class="border border-primary-1 p-2 bg-yellow-50 rounded-lg" type="submit">
                                            <i class="fa-solid fa-caret-up"></i>
                                            <span class="ml-2">
                                                Upgrade to Admin
                                            </span>
                                        </button>
                                    </form>
                                    @break
                                @default
                                    {{ "UNKNOWN" }}
                            @endswitch

                            <form action="{{ route("user.destroy", $user->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="border border-primary-1 p-2 bg-red-50 rounded-lg" type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                    <span class="ml-2">
                                        Delete
                                    </span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                    <th colspan="8" class="px-6 align-middle border border-solid border-blueGray-100 py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                        No User Found
                    </th>
                @endforelse
            </tbody>
        </x-slot>
    </x-table.table>
</div>
@endsection
