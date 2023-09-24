
<div class="flex justify-around border-black p-5 w-full">
    @if($header == "none")
        <x-link route="product.index" text="Product" />
        <x-link route="promo.index" text="Promo" />
        <x-link route="category.index" text="Category" />
        <x-link route="supplier.index" text="Supplier" />
    @else
        @if($header == "product")
            <x-link route="product.index" text="Product" :on=true />
        @else
            <x-link route="product.index" text="Product" />
        @endif

        @if($header == "promo")
            <x-link route="promo.index" text="Promo" :on=true />
        @else
            <x-link route="promo.index" text="Promo" />
        @endif

        @if($header == "category")
            <x-link route="category.index" text="Category" :on=true />
        @else
            <x-link route="category.index" text="Category" />
        @endif

        @if($header == "supplier")
            <x-link route="supplier.index" text="Supplier" :on=true />
        @else
            <x-link route="supplier.index" text="Supplier" />
        @endif
    @endif
</div>
