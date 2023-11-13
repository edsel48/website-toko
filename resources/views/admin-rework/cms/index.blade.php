@extends("../admin-rework/rework")
@section("content")

<div class="flex flex-col gap-5">

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            HEADER CMS
        </div>

        <form action="{{ route("cms.update", $header->id) }}" method="POST">
            @csrf
            <div class="flex flex-col gap-5">
                <x-input value="{{ $header->header }}" name="header" title="Header Title"></x-input>
                <x-input value="{{ $header->description }}" name="description" title="Header Description"></x-input>

                <div class="">
                    <x-button primary={{false}} type="submit">
                        <x-slot name="text">
                            <i class="fa-solid fa-plus"></i>
                            <span class="ml-3">
                                Update Header
                            </span>
                        </x-slot>
                    </x-button>
                </div>
            </div>
        </form>
    </div>

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            PRODUCT CMS
        </div>

        <div class="flex gap-5 items-center justify-around">
            @foreach ($products as $product)
                <div class="flex flex-col flex-1 gap-5">
                    <div class="font-semibold text-md">
                        Product {{ $loop->index + 1 }}
                    </div>
                    <form action="{{ route("cms.update", $product->id) }}" method="POST">
                        @csrf
                        <div class="flex flex-col gap-3">
                            <select name="product_id" id="" class="w-full p-3">
                                <option class="p-5" value="{{ $product->product->id }}" selected>{{ $product->product->name }}</option>

                                @foreach($allProducts as $pd)
                                    <option class="p-5" value="{{ $pd->id }}">{{ $pd->name }}</option>
                                @endforeach
                            </select>
                            <div class="">
                                <x-button primary={{false}} type="submit">
                                    <x-slot name="text">
                                        <i class="fa-solid fa-plus"></i>
                                        <span class="ml-3">
                                            Update Product
                                        </span>
                                    </x-slot>
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            REVIEW CMS
        </div>

        <form action="{{ route("cms.update", $review->id) }}" method="POST">
            @csrf
            <div class="flex flex-col gap-5">
                <x-input value="{{ $review->header }}" name="header" title="Review Title"></x-input>
                <x-input value="{{ $review->description }}" name="description" title="Review Description"></x-input>

                <div class="">
                    <x-button primary={{false}} type="submit">
                        <x-slot name="text">
                            <i class="fa-solid fa-plus"></i>
                            <span class="ml-3">
                                Update Review
                            </span>
                        </x-slot>
                    </x-button>
                </div>
            </div>
        </form>
    </div>

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            QUALITY CMS
        </div>

        <div class="flex justify-around items-center gap-5">
            @foreach ($qualities as $quality)
            <div class="flex flex-col flex-1 gap-5">
                <div class="font-semibold text-md">
                    Quality {{ $loop->index + 1 }}
                </div>
                <form action="{{ route("cms.update", $quality->id) }}" method="POST">
                    @csrf
                    <div class="flex flex-col gap-5">
                        <x-input value="{{ $quality->header }}" name="header" title="Quality Title"></x-input>
                        <x-input value="{{ $quality->description }}" name="description" title="Quality Description"></x-input>

                        <div class="">
                            <x-button primary={{false}} type="submit">
                                <x-slot name="text">
                                    <i class="fa-solid fa-plus"></i>
                                    <span class="ml-3">
                                        Update Quality
                                    </span>
                                </x-slot>
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        @endforeach
        </div>
    </div>

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            INSTAGRAM CMS
        </div>

        <div class="flex gap-10 justify-around items-center">
            @foreach ($instagram as $insta)
                <div class="flex flex-col flex-1 gap-5">
                    <div class="font-semibold text-md">
                        Instagram Image No.{{ $loop->index + 1 }}
                    </div>
                    <form action="{{ route("cms.update", $insta->id) }}" method="POST">
                        @csrf
                        <div class="flex flex-col gap-5">
                            <input type="file" id="file-upload" class="hidden">
                        <label for="file-upload" class="z-20 flex flex-col-reverse items-center justify-center w-full h-full cursor-pointer">
                            <p class="z-10 text-xs font-light text-center text-gray-500">Drag & Drop your files here</p>
                            <svg class="z-10 w-8 h-8 text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                            </svg>
                        </label>
                        <x-button primary={{false}} type="submit">
                            <x-slot name="text">
                                <div class="flex items-center">
                                    <i class="fa-solid fa-plus"></i>
                                    <span class="ml-3">
                                        Update Instagram Post Image
                                    </span>
                                </div>
                            </x-slot>
                        </x-button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
