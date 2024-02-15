<form method="post" enctype="multipart/form-data" action="{{ route('slider.store' ) }}" class="mt-6 space-y-6">
    @csrf
    <div>
        <x-input-label for="title" :value="__('title')" />
        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" />
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>
    <div>
        <x-input-label for="image" :value="__('image')" />
        <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" :value="old('image')" />
        <x-input-error class="mt-2" :messages="$errors->get('image')" />
    </div>
    <div>
        <x-input-label for="background" :value="__('background')" />
        <x-text-input id="background" name="background" type="file" class="mt-1 block w-full" :value="old('background')" />
        <x-input-error class="mt-2" :messages="$errors->get('background')" />
    </div>

    <div>
        <x-input-label for="link" :value="__('link')" />
        <x-text-input id="link" name="link" type="text" class="mt-1 block w-full" :value="old('link')" />
        <x-input-error class="mt-2" :messages="$errors->get('link')" />
    </div>
    <div>
        <x-input-label for="text" :value="__('text')" />
        <x-text-input id="text" name="text" type="text" class="mt-1 block w-full" :value="old('text')" />
        <x-input-error class="mt-2" :messages="$errors->get('text')" />
    </div>

    <x-primary-button>{{ __('Create') }}</x-primary-button>
</form>

