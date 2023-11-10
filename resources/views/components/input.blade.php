@if ($type == "number")
    <div class="flex flex-col w-full">
        <label for="{{ $name }}" class="text-sm font-medium">{{ $title }}</label>

        <input id="{{ $name }}" type="number" class="mt-1 p-2 border @error('{{ $name }}') border-red-500 @enderror
        [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" name="{{ $name }}" required autocomplete="{{ $name }}" autofocus value="{{ $value }}" step=".1">

        @error('{{ $name }}')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
@elseif ($type == "text")
    <div class="flex flex-col w-full">
        <label for="{{ $name }}" class="text-sm font-medium">{{ $title }}</label>

        <input id="{{ $name }}" type="text" class="mt-1 p-2 border @error('{{ $name }}') border-red-500 @enderror" name="{{ $name }}" required autocomplete="{{ $name }}" autofocus value="{{ $value }}">

        @error('{{ $name }}')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
@endif
