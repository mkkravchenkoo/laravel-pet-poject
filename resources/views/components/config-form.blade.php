@props(['config' => null, 'fields' => []])

<form method="post" enctype="multipart/form-data" action="{{ route('admin.config.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')
    @foreach($fields as $field)
        <div>
            <x-input-label for="{{$field}}" :value="ucfirst(__($field))" />
            <x-text-input id="{{$field}}" name="{{$field}}" type="text" class="mt-1 block w-full" :value="old($field, $config[$field] ?? '')" />
            <x-input-error class="mt-2" :messages="$errors->get($field)" />
        </div>
    @endforeach
    <x-primary-button>{{ __('Update') }}</x-primary-button>
</form>
