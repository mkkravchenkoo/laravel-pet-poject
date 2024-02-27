@props(['name', 'value'])
    <textarea
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full min-h-96"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes }}
    >{{ $value ?? ''}}</textarea>

