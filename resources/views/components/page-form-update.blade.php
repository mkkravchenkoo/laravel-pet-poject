@props(['page' => null, ])
<form method="post" enctype="multipart/form-data" action="{{ route('page.update', $page->id ) }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')
    <div>
        <x-input-label for="title" :value="__('title')" />
        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $page->title)" />
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>
    <div>
        <x-input-label for="thumbnail" :value="__('thumbnail')" />
        <x-text-input id="thumbnail" name="thumbnail" type="file" class="mt-1 block w-full" :value="old('thumbnail', $page->thumbnail)" />
        <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
        <img src="{{ asset('storage/' . $page?->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
    </div>
    <div>
        <x-input-label for="slug" :value="__('slug')" />
        <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug', $page->slug)" />
        <x-input-error class="mt-2" :messages="$errors->get('slug')" />
    </div>
    <div>
        <x-input-label for="body" :value="__('Body')" />
        <x-textarea id="body" name="body" type="text" class="mt-1 block w-full" :value="old('body', $page->body)" />
        <x-input-error class="mt-2" :messages="$errors->get('body')" />
    </div>
    <x-primary-button>{{ __('Update') }}</x-primary-button>
</form>
