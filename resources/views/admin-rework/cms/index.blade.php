@extends("../admin-rework/rework")
@section("content")

<div class="flex flex-col gap-5">

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            HEADER CMS
        </div>

        <form action="{{ route("cms.update", $header->id) }}">
            {{ $header }}
        </form>
    </div>

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            PRODUCT CMS
        </div>

        @foreach ($products as $product)
            <form action="{{ route("cms.update", $product->id) }}">
                {{ $product }}
            </form>
        @endforeach
    </div>

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            REVIEW CMS
        </div>

        <form action="{{ route("cms.update", $review->id) }}">
            {{ $review }}
        </form>
    </div>

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            QUALITY CMS
        </div>

        @foreach ($qualities as $quality)
            <form action="{{ route("cms.update", $quality->id) }}">
                {{ $quality }}
            </form>
        @endforeach
    </div>

    <div class="flex flex-col gap-3 border border-white p-3 border-b-primary-1">
        <div class="font-bold text-lg">
            INSTAGRAM CMS
        </div>

        @foreach ($instagram as $insta)
            <form action="{{ route("cms.update", $insta->id) }}">
                {{ $insta }}
            </form>
        @endforeach
    </div>

</div>

@endsection
