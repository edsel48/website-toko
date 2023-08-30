
<div class="flex justify-around border-black p-5 w-full">
    @if($header == "none")
        <a href="./admin/product">Product</a>
        <a href="./admin/promo">Promo</a>
        <a href="./admin/category">Category</a>
        <a href="./admin/supplier">Supplier</a>
    @else
        @if($header == "product")
            <a href="./product"><b>Product</b></a>
        @else
            <a href="./product">Product</a>
        @endif

        @if($header == "promo")
            <a href="./promo"><b>Promo</b></a>
        @else
            <a href="./promo">Promo</a>
        @endif

        @if($header == "category")
            <a href="./category"><b>Category</b></a>
        @else
            <a href="./category">Category</a>
        @endif

        @if($header == "supplier")
            <a href="./supplier"><b>Supplier</b></a>
        @else
            <a href="./supplier">Supplier</a>
        @endif
    @endif
</div>
