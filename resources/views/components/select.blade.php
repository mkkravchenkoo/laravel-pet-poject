@props(['value' => null, 'options' => []])

<select {{ $attributes->class([
    'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full',
]) }}>
    <option value="">Select</option>
    @foreach($options as $key => $text)
        <option value="{{ $key }}" {{ ($key == $value) ? 'selected' : null }}>
            {{ $text }}
        </option>
    @endforeach
</select>
