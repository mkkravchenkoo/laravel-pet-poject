@props(['slide' => null, ])
<form method="post" enctype="multipart/form-data" action="{{ route('slider.update', $slide->id ) }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')
    <div>
        <x-input-label for="title" :value="__('title')" />
        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $slide->title)" />
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>
    <div>
        <x-input-label for="image" :value="__('image')" />
        <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" :value="old('image', $slide->image)" />
        <x-input-error class="mt-2" :messages="$errors->get('image')" />
        <img src="{{ asset('storage/' . $slide?->image) }}" alt="" class="rounded-xl ml-6" width="100">
    </div>
    <div>
        <x-input-label for="background" :value="__('background')" />
        <x-text-input id="background" name="background" type="file" class="mt-1 block w-full" :value="old('background', $slide->background)" />
        <x-input-error class="mt-2" :messages="$errors->get('background')" />
        <img src="{{ asset('storage/' . $slide?->background) }}" alt="" class="rounded-xl ml-6" width="100">
    </div>

    <div>
        <x-input-label for="link" :value="__('link')" />
        <x-text-input id="link" name="link" type="text" class="mt-1 block w-full" :value="old('link', $slide->link)" />
        <x-input-error class="mt-2" :messages="$errors->get('link')" />
    </div>
    <div>
        <x-input-label for="text" :value="__('text')" />
        <x-text-input id="text" name="text" type="text" class="mt-1 block w-full" :value="old('text', $slide->text)" />
        <x-input-error class="mt-2" :messages="$errors->get('text')" />
    </div>
    <x-primary-button>{{ __('Update') }}</x-primary-button>
</form>
