<form method="post" enctype="multipart/form-data" action="{{ route('page.store' ) }}" class="mt-6 space-y-6">
    @csrf
    <div>
        <x-input-label for="title" :value="__('title')" />
        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" />
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>
    <div>
        <x-input-label for="thumbnail" :value="__('thumbnail')" />
        <x-text-input id="thumbnail" name="thumbnail" type="file" class="mt-1 block w-full" :value="old('thumbnail')" />
        <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
    </div>
    <div>
        <x-input-label for="slug" :value="__('slug')" />
        <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug')" />
        <x-input-error class="mt-2" :messages="$errors->get('slug')" />
    </div>
    <div>
        <x-input-label for="body" :value="__('body')" />
        <x-textarea id="body" name="body" type="text" class="mt-1 block w-full" :value="old('body')" />
        <x-input-error class="mt-2" :messages="$errors->get('body')" />
    </div>
    <x-primary-button>{{ __('Create') }}</x-primary-button>
</form>
