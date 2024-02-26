@props(['name', 'value'])
    <textarea
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes }}
    >{{ $value ?? ''}}</textarea>

