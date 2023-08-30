<div class="product">
    <div class="w-80 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
        <div class="h-48 w-full checker-bg flex items-center justify-center p-4 text-blue-500">
            @if ($img != "")
                <img src="{{ $img }}" alt="" class="w-20 h-20">
            @else
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
            @endif
        </div>

        <div class="p-4 border-t border-gray-200">
          <div class="flex items-center justify-between">
            <h1 class="text-gray-800 text-lg font-semibold">{{$name}}</h1>
          </div>
          <p class="text-gray-400 text-md my-1">{{ "Rp " . $price }}</p>
          @if((int)$stock >= 0)
            <p class="text-gray-400 hover:text-green-700 text-md my-1">{{ "Stock : " . $stock . " pcs"}}</p>
          @else
            <p class="text-gray-400 hover:text-red-700 text-md my-1">{{ "Stock : " . $stock . " pcs"}}</p>
          @endif
        </div>
      </div>
</div>
