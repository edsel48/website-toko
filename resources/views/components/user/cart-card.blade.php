<div class="flex gap-2">
    <div class="image">
        <img class="rounded-md" src="https://placehold.co/300x150" alt="">
    </div>

    <div class="flex gap-10 justify-between items-center text-primary-1">
        <div class="font-bold text-lg">
            Product Name
        </div>
        <div class="text-primary-2 text-md">
            Product Price
        </div>
        <div class="text-primary-2 text-sm flex items-center justify-around gap-x-5">
            <x-button type="button" :primary=false>
                <x-slot name="text">
                    <i class="fa-solid fa-caret-left"></i>
                </x-slot>
            </x-button>
            Quantity
            <x-button type="button" :primary=false>
                <x-slot name="text">
                    <i class="fa-solid fa-caret-right"></i>
                </x-slot>
            </x-button>
        </div>
        <div class="font-bold text-md">
            Rp 17.000.000
        </div>
    </div>
</div>
