@extends('../base')

@section("content")
<x-user.user-header />
<section>
    <div class="flex justify-around gap-5 my-8 pb-10">
        <div class="left image flex-1">
            <img src="https://placeholder.co/800x600" alt="" class="rounded-xl">
        </div>
        <div class="right flex flex-col flex-1 gap-5 justify-between">
            <div class="text-5xl text-primary-1 font-semibold">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ratione dolore temporibus amet necessitatibus iste optio quaerat ut asperio
            </div>
            <div class="text-xl text-primary-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere placeat dolorum temporibus quis, perferendis architecto natus vero, dolore eum recusandae earum quasi, necessitatibus odit non eius obcaecati vel atque facilis?
            </div>
            <div class="button">
                <x-button primary={{false}}>
                    <x-slot name="text">
                        <i class="fa-solid fa-caret-right"></i>
                        <span class="ml-3">
                            Read More
                        </span>
                    </x-slot>
                </x-button>
            </div>
        </div>
    </div>
    <div class="h-screen">
        <div class="font-bold text-4xl text-primary-1 item-start my-8">
            Product Kami
        </div>
        <div class="flex gap-10 w-full flex-wrap justify-between px-8">
            @foreach ($products as $product)
            <x-product.product-card name="{{$product->name}}" price="{{$product->price}}"
                stock="{{$product->stock}}" id="{{$product->id}}" />
            @endforeach
        </div>
    </div>
    <div class="reviews p-14 flex flex-col justify-center items-center gap-5">
        <div class="review text-lg text-center">
            <span>"</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, saepe natus. Inventore vitae quisquam tempora recusandae expedita dolores soluta porro numquam commodi placeat hic perspiciatis maxime consequatur, rem unde. Vel!
            <span>"</span>
        </div>
        <div class="stars text-yellow-300">
            @for ($i = 0; $i < 5; $i++)
                <i class="fa-solid fa-star"></i>
            @endfor
        </div>
        <div class="image">
            <div class="rounded-full">
                <img src="https://placeholder.com/100" alt="" class="rounded-full">
            </div>
            <div class="name text-lg font-semibold my-4 text-center">
                Reviewer
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center gap-16 h-screen">
        <div class="text-4xl text-primary-1 font-bold">
            Quality Without Promise
        </div>
        <div class="flex justify-around items-center gap-28">
            @for ($i = 0; $i < 3; $i++)
            <div class="card flex flex-col gap-2.5 w-auto flex-1 text-center">
                <div class="image">
                    <div class="bg-gray-200 rounded-full p-5 flex justify-center items-center">
                        <i class="fa-solid fa-stop text-4xl text-primary-1"></i>
                    </div>
                </div>
                <div class="font-semibold text-xl">
                    Test Something
                </div>
                <div class="text-lg">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam exercitationem excepturi illo rerum officia facilis neque impedit esse, dolore debitis sed expedita vitae possimus saepe unde quaerat aperiam iste eius!
                </div>
            </div>
            @endfor
        </div>
        <div class="flex justify-between items-center gap-28">
            @for ($i = 0; $i < 2; $i++)
            <div class="card flex flex-col gap-2.5 w-auto flex-1 text-center">
                <div class="image">
                    <div class="bg-gray-200 rounded-full p-5 flex justify-center items-center">
                        <i class="fa-solid fa-stop text-4xl text-primary-1"></i>
                    </div>
                </div>
                <div class="font-semibold text-xl">
                    Test Something
                </div>
                <div class="text-lg">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam exercitationem excepturi illo rerum officia facilis neque impedit esse, dolore debitis sed expedita vitae possimus saepe unde quaerat aperiam iste eius!
                </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="my-10 text-center h-screen">
        <div class="text-4xl text-primary-1 font-bold my-10">
            Our Instagram
        </div>
        <div class="carousel flex gap-5 justify-around items-center">
            @for ($i = 0; $i < 5; $i++)
            <div class="card border border-primary-1 rounded-xl overflow-hidden">
                <img src="https://placeholder.com/200" alt="500">
            </div>
            @endfor
        </div>
        <div class="button  my-10">
            <a href="">
                <x-button primary={{false}}>
                    <x-slot name="text">
                        <i class="fa-brands fa-instagram"></i>
                        <span class="ml-3">
                            Follow Our Instagram
                        </span>
                    </x-slot>
                </x-button>
            </a>
        </div>
    </div>
</section>

@endsection
