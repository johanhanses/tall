@props(['trigger'])

<div x-cloak x-show="{{ $trigger }}" class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full">
    <div @click.away="{{ $trigger }} = false" @keydown.escape.window="{{ $trigger }} = false"
        {{ $attributes->merge(["class" => "m-auto bg-gray-200 shadow-2xl rounded-xl p-8"]) }}>
        {{ $slot }}
    </div>
</div>
